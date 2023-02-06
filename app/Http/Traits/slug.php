<?php

namespace App\Http\Traits;

use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Alias;
use Throwable;

trait slug
{
	static function create_slug($title = false, $unique = true)
	{
		$response = null;
		if ($title != null) {
			$response = SlugService::createSlug(Alias::class, 'varAlias', $title, ['unique' => $unique]);
			$response = explode(':', $response);
		}
		return $response;
	}

	static function resolve_alias($alias, $sector = false, $moduleID = false) {
		$response = null;
		//try {
			$objResult = Alias::getAlias($alias, $sector, $moduleID);
			if (!empty($objResult)) {
				$response = $objResult->id;
			} else {
				abort(404);
			}
		// } catch (Throwable $e) {
		// 	abort(403, $e->getMessage() . PHP_EOL);
		// }

		return $response;
	}

	static function resolve_alias_for_routes($alias, $sector = false)
	{
		$response = null;
		$objResult = Alias::getAliasforCMS($alias, $sector);
		if (!empty($objResult)) {
			$response = $objResult->id;
		} else {
			$response = $alias;
		}
		return $response;
	}

	static function create_slug_static($string, $replace=array(), $delimiter='-') {
        if( !empty($replace) ) {
            $string = string_replace((array)$replace, ' ', $string);
        }

        $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        $slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $slug);
        $slug = \Str::lower(trim($slug, '-'));
        $slug = preg_replace("/[\/_|+ -]+/", $delimiter, $slug);

        return $slug;
    }
}
