<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Seller;
use App\Events\GroupMessageEvent;
use App\Models\Message;
use App\Models\MessageGroup;
use App\Events\PrivateMessageEvent;
use App\Models\UserMessage;

class SupportController extends Controller
{

    public function admin()
    {
        // $admin = Admin::where('id', '!=', Auth::guard('admin')->user()->id)->get();
        // $this->data['admin'] = $admin;

        // $friendInfo = seller::first();
        $friendsInfo = Seller::get();

        $myInfo = Admin::find(Auth::guard('admin')->user()->id);
        // $this->data['users'] = $users;
        $this->data['friendsInfo'] = $friendsInfo;
        $this->data['myInfo'] = $myInfo;

        // dd($this->data);
        return view('admin.support.index', $this->data);
    }

    public function seller()
    {
        // $users = Admin::get();

        $friendInfo = Admin::first();
        // $friendInfo = Admin::get()->whereNotIn('id', Auth::guard('seller')->user()->id)->first();
        $myInfo = seller::find(Auth::guard('seller')->user()->id);

        // $this->data['users'] = $users;

        $this->data['friendInfo'] = $friendInfo;
        $this->data['myInfo'] = $myInfo;

        // dd('hello');
        return view('seller.support.index', $this->data);
    }



    public function sendMessageSeller(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'receiver_id' => 'required',
            'type' => 'required'
        ]);

        $sender_id = Auth::guard('seller')->user()->id;
        $receiver_id = $request->receiver_id;

        $message = new Message();
        $message->message = $request->message;

        // dd($message->message);
        if ($message->save()) {
            try {
                $message->sellers()->attach($sender_id, ['receiver_id' => $receiver_id]);
                $sender = Seller::where('id', '=', $sender_id)->first();

                $data = [];
                $data['sender_id'] = "$sender_id-2";
                $data['seller_admin'] = $request->type;
                $data['sender_name'] = $sender->name;
                $data['receiver_id'] = "$receiver_id-1";
                $data['content'] = $message->message;
                $data['created_at'] = $message->created_at;
                $data['message_id'] = $message->id;

                event(new PrivateMessageEvent($data));

                return response()->json([
                    'data' => $data,
                    'success' => true,
                    'message' => 'Message sent successfully'
                ]);
            } catch (\Exception $e) {
                $message->delete();
            }
            return response()->json([
                'data' => $data,
                'success' => true,
                'message' => 'Message sent successfully'
            ]);
        }
    }

    public function sendMessageAdmin(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'receiver_id' => 'required',
            'type' => 'required'
        ]);


        $sender_id = Auth::guard('admin')->user()->id;
        $receiver_id = $request->receiver_id;

        $message = new Message();
        $message->message = $request->message;
        $message->save();
        // // dd($message->message);
        // if () {
        //     try {
        $message->admins()->attach($sender_id, ['receiver_id' => $receiver_id]);
        $sender = Seller::where('id', '=', $sender_id)->first();

        $data = [];
        $data['sender_id'] = "$sender_id-1";
        $data['seller_admin'] = $request->type;
        // $data['sender_name'] = $sender->name;
        $data['receiver_id'] = "$receiver_id-2";
        $data['content'] = $message->message;
        $data['created_at'] = $message->created_at;
        $data['message_id'] = $message->id;
        event(new PrivateMessageEvent($data));

        return response()->json([
            'data' => $data,
            'success' => true,
            'message' => 'Message sent successfully'
        ]);
        //     } catch (\Exception $e) {
        //         $message->delete();
        //     }
        // }
    }

    public function SellerInfo(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        $seller = seller::find($request->id);
        $userMessage = UserMessage::with('message')->where('sender_id', '=', $request->id)->orWhere('receiver_id', '=', $request->id)->latest()->take(10)->get();
        return response()->json([
            'messageData' => $userMessage,
            'seller' => $seller,
            'success' => true,
            'message' => 'info get successfully'
        ]);
    }
}
