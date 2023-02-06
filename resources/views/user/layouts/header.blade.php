<header>
    <div class="container-fluid header-bg">
        <div class="row">
            <div class="col-lg-2 col-md-1 col-sm-2  header-logo  text-center text-start">
                <a href="#"><img src="{{asset('user/user-assets/images/home_index_logo.png')}}" alt="" class=""></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-5 col search-sec">
                <button class="search-btn "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z" />
                    </svg></button>
                <input type="text" name="search" class="header-search" placeholder="Search for products, brands and more">
            </div>
            <div class="col-lg-4 col-md-5 col justify-content-center col-sm-2 header-profile-sec justify-content-end">
                <div class="user-header">
                    <!-- <i class="fa fa-user"></i> -->
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.2853 5.28571C14.2853 7.65265 12.3665 9.57143 9.99958 9.57143C7.63265 9.57143 5.71387 7.65265 5.71387 5.28571C5.71387 2.91878 7.63265 1 9.99958 1C12.3665 1 14.2853 2.91878 14.2853 5.28571Z" fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99958 1.75C8.04686 1.75 6.46387 3.33299 6.46387 5.28571C6.46387 7.23844 8.04686 8.82143 9.99958 8.82143C11.9523 8.82143 13.5353 7.23844 13.5353 5.28571C13.5353 3.33299 11.9523 1.75 9.99958 1.75ZM4.96387 5.28571C4.96387 2.50457 7.21843 0.25 9.99958 0.25C12.7807 0.25 15.0353 2.50457 15.0353 5.28571C15.0353 8.06686 12.7807 10.3214 9.99958 10.3214C7.21843 10.3214 4.96387 8.06686 4.96387 5.28571Z" fill="white" />
                        <path d="M19.5714 20.1429H1C1 17.7619 2.85714 13 10.2857 13C17.7143 13 19.5714 17.7619 19.5714 20.1429Z" fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.30958 15.1661C3.86682 13.5023 6.39944 12.25 10.2857 12.25C14.172 12.25 16.7046 13.5023 18.2618 15.1661C19.7995 16.8088 20.3214 18.7847 20.3214 20.1429C20.3214 20.5571 19.9856 20.8929 19.5714 20.8929H1C0.585786 20.8929 0.25 20.5571 0.25 20.1429C0.25 18.7847 0.771956 16.8088 2.30958 15.1661ZM1.81378 19.3929H18.7576C18.6016 18.4301 18.14 17.2309 17.1667 16.1911C15.9382 14.8786 13.828 13.75 10.2857 13.75C6.74342 13.75 4.63318 14.8786 3.40471 16.1911C2.43143 17.2309 1.96986 18.4301 1.81378 19.3929Z" fill="white" />
                    </svg>
                    <div class="dropdown my_account_drop_down">
                        <p class="dropdown-toggle header-dd mb-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            My Account
                            <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8423 0.167368C14.0526 0.390524 14.0526 0.752333 13.8423 0.97549L7.38075 7.83263C7.17047 8.05579 6.82953 8.05579 6.61925 7.83263L0.157711 0.97549C-0.0525703 0.752333 -0.0525703 0.390524 0.157711 0.167368C0.367994 -0.055789 0.708928 -0.055789 0.919211 0.167368L7 6.62045L13.0808 0.167368C13.2911 -0.0557892 13.632 -0.0557892 13.8423 0.167368Z" fill="white" />
                            </svg>
                        </p>
                        <div class="dropdown-menu header_drop_down py-0 overflow-hidden" aria-labelledby="dropdownMenuButton ">
                            <a class="dropdown-item" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.2857 6.28571C16.2857 8.65265 14.3669 10.5714 12 10.5714C9.63307 10.5714 7.71429 8.65265 7.71429 6.28571C7.71429 3.91878 9.63307 2 12 2C14.3669 2 16.2857 3.91878 16.2857 6.28571Z" fill="#4FC6AF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75C10.0473 2.75 8.46429 4.33299 8.46429 6.28571C8.46429 8.23844 10.0473 9.82143 12 9.82143C13.9527 9.82143 15.5357 8.23844 15.5357 6.28571C15.5357 4.33299 13.9527 2.75 12 2.75ZM6.96429 6.28571C6.96429 3.50457 9.21886 1.25 12 1.25C14.7812 1.25 17.0357 3.50457 17.0357 6.28571C17.0357 9.06686 14.7812 11.3214 12 11.3214C9.21886 11.3214 6.96429 9.06686 6.96429 6.28571Z" fill="#4FC6AF" />
                                    <path d="M21.5719 21.1429H3.00043C3.00043 18.7619 4.85757 14 12.2861 14C19.7147 14 21.5719 18.7619 21.5719 21.1429Z" fill="#4FC6AF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.31001 16.1661C5.86725 14.5023 8.39986 13.25 12.2861 13.25C16.1724 13.25 18.705 14.5023 20.2623 16.1661C21.7999 17.8088 22.3219 19.7847 22.3219 21.1429C22.3219 21.5571 21.9861 21.8929 21.5719 21.8929H3.00043C2.58621 21.8929 2.25043 21.5571 2.25043 21.1429C2.25043 19.7847 2.77238 17.8088 4.31001 16.1661ZM3.81421 20.3929H20.7581C20.602 19.4301 20.1404 18.2309 19.1672 17.1911C17.9387 15.8786 15.8284 14.75 12.2861 14.75C8.74385 14.75 6.63361 15.8786 5.40513 17.1911C4.43185 18.2309 3.97028 19.4301 3.81421 20.3929Z" fill="#4FC6AF" />
                                </svg> My Profile</a>
                            <a class="dropdown-item" href="#"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.2903 9.30551C13.1572 9.30551 13.024 9.25481 12.9226 9.15322L11.7368 7.96742L12.4721 7.23214L13.2904 8.05043L15.1807 6.16016L15.9163 6.89543L13.6583 9.15341C13.5564 9.25482 13.4232 9.30552 13.2904 9.30552L13.2903 9.30551Z" fill="#4FC6AF" />
                                    <path d="M18.8603 19.1613C18.8603 20.1311 18.0712 20.9203 17.1014 20.9203C16.1314 20.9203 15.3422 20.1311 15.3422 19.1613C15.3422 18.1913 16.1314 17.4023 17.1014 17.4023C18.0712 17.4023 18.8603 18.1913 18.8603 19.1613Z" fill="#4FC6AF" />
                                    <path d="M11.5266 17.9174C12.2136 18.6044 12.2136 19.7182 11.5266 20.405C10.8396 21.0919 9.72606 21.0919 9.03909 20.405C8.35212 19.7182 8.35212 18.6044 9.03909 17.9174C9.72606 17.2306 10.8396 17.2306 11.5266 17.9174Z" fill="#4FC6AF" />
                                    <path d="M22.036 7.42815C21.9626 7.32656 21.8449 7.26621 21.7195 7.26621L18.4482 7.26602C18.2493 4.88043 16.2444 3 13.8083 3C11.3721 3 9.36684 4.88043 9.16792 7.26602H6.30707L5.14927 3.79547C5.06087 3.53007 4.81238 3.35103 4.53248 3.35103L0.999878 3.35122V4.65128H4.06407L7.76288 15.7391C7.85389 16.0116 8.1074 16.1837 8.37968 16.1837C8.38376 16.1837 8.38822 16.1837 8.39249 16.1835H19.0049C19.1728 16.1835 19.3219 16.0762 19.3748 15.917L22.0893 7.7798C22.1293 7.66039 22.1092 7.52964 22.0359 7.42805L22.036 7.42815ZM13.8084 11.2724C11.8143 11.2724 10.1919 9.65009 10.1919 7.65618C10.1919 7.52432 10.1989 7.39431 10.2129 7.26616C10.4079 5.45519 11.946 4.04018 13.8082 4.04018C15.6701 4.04018 17.208 5.45519 17.403 7.26616C17.4171 7.39431 17.424 7.52432 17.424 7.65618C17.4244 9.65009 15.8021 11.2724 13.8084 11.2724H13.8084Z" fill="#4FC6AF" />
                                </svg> Orders</a>
                            <a class="dropdown-item" href="#"> <img src="assets/image/footer_header/Log_out.png" alt="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.02977 10.352C2.46736 15.8093 8.06072 19.3995 11.3288 20.7547C11.7352 20.9232 12.1895 20.9321 12.6006 20.7756C16.0066 19.4787 21.4022 15.8747 21.9217 10.352C22.9149 3.00022 14.1743 0.882353 11.9608 5.30821C9.62412 0.824836 1.44559 3.06652 2.02977 10.352Z" fill="#4FC6AF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.62001 2.72126C3.05215 3.75431 0.963789 6.44208 1.28213 10.4122C1.52104 13.3917 3.16368 15.8151 5.10424 17.6385C7.04581 19.4628 9.34365 20.7437 11.0415 21.4478C11.6221 21.6885 12.2747 21.7025 12.8675 21.4768C14.6496 20.7982 16.9391 19.5236 18.861 17.6916C20.7812 15.8614 22.381 13.4277 22.6669 10.4376C23.2053 6.40614 21.0528 3.7247 18.412 2.71337C16.2069 1.86896 13.5168 2.17156 11.9563 3.97146C10.3877 2.15792 7.79038 1.84812 5.62001 2.72126ZM6.17985 4.11287C8.18865 3.30473 10.3527 3.84581 11.2957 5.65513C11.426 5.90502 11.6853 6.06082 11.9671 6.05846C12.2489 6.05611 12.5055 5.896 12.6316 5.64396C13.5086 3.89036 15.7648 3.30587 17.8755 4.11417C19.9067 4.89201 21.6258 6.93997 21.1784 10.2519C21.177 10.2619 21.1759 10.272 21.1749 10.282C20.9374 12.8077 19.5818 14.9323 17.8261 16.6059C16.0689 18.2808 13.9576 19.4567 12.3337 20.075L12.6006 20.7759L12.3337 20.075C12.1042 20.1624 11.8482 20.1584 11.616 20.0622C10.0458 19.411 7.91291 18.2193 6.13138 16.5454C4.34885 14.8705 2.97602 12.7702 2.77733 10.2923C2.5115 6.977 4.22031 4.90119 6.17985 4.11287Z" fill="#4FC6AF" />
                                </svg>
                                Wishlist</a>
                            <a class="dropdown-item" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.5 6.5C2.5 4.29086 4.29086 2.5 6.5 2.5H17.5C19.7091 2.5 21.5 4.29086 21.5 6.5V12C21.5 14.2091 19.7091 16 17.5 16H13.6775C13.5627 16 13.4513 16.0395 13.3622 16.1119L6.95492 21.3179C6.55742 21.6408 5.98909 21.2284 6.17295 20.7503L7.73866 16.6795C7.86462 16.352 7.62287 16 7.27199 16H6.5C4.29086 16 2.5 14.2091 2.5 12V6.5Z" fill="#4FC6AF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.75 6.5C1.75 3.87665 3.87665 1.75 6.5 1.75H17.5C20.1234 1.75 22.25 3.87665 22.25 6.5V12C22.25 14.6234 20.1234 16.75 17.5 16.75H13.7663L7.42786 21.9C6.43412 22.7074 5.01331 21.6761 5.47294 20.4811L6.90798 16.75H6.5C3.87665 16.75 1.75 14.6234 1.75 12V6.5ZM6.5 3.25C4.70507 3.25 3.25 4.70507 3.25 6.5V12C3.25 13.7949 4.70507 15.25 6.5 15.25H7.27199C8.14921 15.25 8.75357 16.13 8.43867 16.9487L7.20943 20.1447L12.8893 15.5299C13.1121 15.3488 13.3904 15.25 13.6775 15.25H17.5C19.2949 15.25 20.75 13.7949 20.75 12V6.5C20.75 4.70507 19.2949 3.25 17.5 3.25H6.5Z" fill="#4FC6AF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.75 11.3574C6.75 10.9432 7.08579 10.6074 7.5 10.6074H16.5C16.9142 10.6074 17.25 10.9432 17.25 11.3574C17.25 11.7716 16.9142 12.1074 16.5 12.1074H7.5C7.08579 12.1074 6.75 11.7716 6.75 11.3574Z" fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.75 8C6.75 7.58579 7.08579 7.25 7.5 7.25H12C12.4142 7.25 12.75 7.58579 12.75 8C12.75 8.41421 12.4142 8.75 12 8.75H7.5C7.08579 8.75 6.75 8.41421 6.75 8Z" fill="white" />
                                </svg>
                                My Chats</a>
                            <a class="dropdown-item" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.28571 13.9713V8.62945C6.28571 3.7902 17.7143 3.79014 17.7143 8.62952V13.9713C17.7143 14.0935 17.759 14.211 17.84 14.3024L20.5273 17.337C21.0988 17.9823 20.6407 19 19.7787 19H4.22131C3.35934 19 2.90121 17.9823 3.47267 17.337L6.16004 14.3024C6.24101 14.211 6.28571 14.0935 6.28571 13.9713Z" fill="#4FC6AF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2973 5.25428C17.5242 5.94696 18.4643 7.0682 18.4643 8.62952V13.8761L21.0888 16.8398C22.0889 17.9691 21.2871 19.75 19.7787 19.75H4.22131C2.71286 19.75 1.91113 17.9691 2.91119 16.8398L5.53571 13.8761V8.62945C5.53571 7.06816 6.47583 5.94693 7.7027 5.25427C8.91595 4.56929 10.4807 4.25 12 4.25C13.5193 4.25 15.084 4.56929 16.2973 5.25428ZM8.44016 6.56047C7.52417 7.07762 7.03571 7.77112 7.03571 8.62945V13.9713C7.03571 14.2774 6.9235 14.5715 6.72152 14.7996L4.03415 17.8343C3.89128 17.9956 4.00582 18.25 4.22131 18.25H19.7787C19.9942 18.25 20.1087 17.9956 19.9658 17.8343L17.2785 14.7996L17.84 14.3024L17.2785 14.7996C17.0765 14.5715 16.9643 14.2774 16.9643 13.9713V8.62952C16.9643 7.77115 16.4758 7.07763 15.5598 6.56047C14.6302 6.03563 13.3378 5.75 12 5.75C10.6622 5.75 9.36976 6.03563 8.44016 6.56047Z" fill="#4FC6AF" />
                                    <path d="M14 3.5C14 4.60457 13.1046 5.5 12 5.5C10.8954 5.5 10 4.60457 10 3.5C10 2.39543 10.8954 1.5 12 1.5C13.1046 1.5 14 2.39543 14 3.5Z" fill="#4FC6AF" />
                                    <path d="M15.4996 19C15.4996 19.7956 15.1308 20.5587 14.4745 21.1213C13.8181 21.6839 12.9278 22 11.9996 22C11.0713 22 10.1563 21.6839 9.4999 21.1213C8.84352 20.5587 8.5 19.7956 8.5 19H11.9996H15.4996Z" fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.75 18.25H16.2496V19C16.2496 20.0351 15.7689 20.9996 14.9626 21.6908C14.1598 22.3789 13.0926 22.75 11.9996 22.75C10.9117 22.75 9.81814 22.3819 9.01181 21.6908C8.19323 20.9891 7.75 20.0198 7.75 19L7.75 18.25ZM9.39798 19.75C9.51935 20.0445 9.71565 20.3184 9.988 20.5519C10.4944 20.986 11.231 21.25 11.9996 21.25C12.7631 21.25 13.4764 20.989 13.9864 20.5519C14.2624 20.3153 14.4642 20.0408 14.5908 19.75H9.39798Z" fill="#4FC6AF" />
                                </svg>
                                Notifications</a>
                            <a class="dropdown-item" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7498 12C16.7498 12.4142 16.414 12.75 15.9998 12.75L2.99976 12.75C2.58554 12.75 2.24976 12.4142 2.24976 12C2.24976 11.5858 2.58554 11.25 2.99976 11.25L15.9998 11.25C16.414 11.25 16.7498 11.5858 16.7498 12Z" fill="#4FC6AF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.53002 17.5303C7.23713 17.8232 6.76226 17.8232 6.46936 17.5303L1.54008 12.601C1.20813 12.2691 1.20813 11.7309 1.54008 11.399L6.46937 6.46967C6.76226 6.17678 7.23713 6.17678 7.53003 6.46967C7.82292 6.76256 7.82292 7.23744 7.53003 7.53033L3.06036 12L7.53003 16.4697C7.82292 16.7626 7.82292 17.2374 7.53002 17.5303Z" fill="#4FC6AF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5834 2.66699C14.5834 2.25278 14.9191 1.91699 15.3334 1.91699H19.9C20.3695 1.91699 20.75 2.29755 20.75 2.76699V21.2337C20.75 21.7031 20.3695 22.0837 19.9 22.0837H14.6667C14.2525 22.0837 13.9167 21.7479 13.9167 21.3337C13.9167 20.9194 14.2525 20.5837 14.6667 20.5837H19.25V3.41699H15.3334C14.9191 3.41699 14.5834 3.08121 14.5834 2.66699Z" fill="#4FC6AF" />
                                </svg>
                                Logout</a>
                            <a class="dropdown-item sign-in-popup" href="#"> <img src="assets/image/footer_header/Log_out.png" alt=""> Sign in</a>
                        </div>
                    </div>
                </div>
                <a href="{{route('my_cart')}}" class="user-header">
                    <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8072 12.8647H18.1054C19.1234 12.8647 19.9864 12.2164 20.2701 11.2387L21.663 6.43488C21.8669 5.73191 21.7404 5.03895 21.3005 4.45356C20.8606 3.86817 20.2306 3.55397 19.499 3.55397H7.68029C7.03205 3.55397 6.46345 3.80104 6.03593 4.26425L4.91696 0.405611C4.8461 0.16075 4.62248 0.00152932 4.37981 0.00152932V0H0.561941C0.251999 0 0 0.251316 0 0.561941C0 0.871883 0.251316 1.12388 0.561941 1.12388H3.96025L6.93904 11.3961C6.96096 11.4721 6.9975 11.5394 7.04423 11.5963C7.41398 12.3723 8.18425 12.8665 9.07296 12.8665H14.8068L14.8072 12.8647ZM17.7173 14.335C18.7543 14.335 19.5955 15.1755 19.5955 16.2125C19.5955 17.2496 18.755 18.09 17.7173 18.09C16.6802 18.09 15.8398 17.2496 15.8398 16.2125C15.8398 15.1755 16.6802 14.335 17.7173 14.335ZM9.70751 14.335C10.7446 14.335 11.5857 15.1755 11.5857 16.2125C11.5857 17.2496 10.7453 18.09 9.70751 18.09C8.67045 18.09 7.83002 17.2496 7.83002 16.2125C7.83002 15.1755 8.67045 14.335 9.70751 14.335Z" fill="white" />
                    </svg>
                    <p class="header-dd mb-0">Cart</p>
                </a>
                <div class="user-header">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 6.49981C9.17096 6.49981 8.49998 5.8278 8.49998 4.99979C8.49998 4.17177 9.17096 3.49976 10 3.49976C10.83 3.49976 11.5 4.17177 11.5 4.99979C11.5 5.8278 10.83 6.49981 10 6.49981ZM10 11.5C9.17096 11.5 8.49998 10.828 8.49998 10C8.49998 9.17199 9.17096 8.49998 10 8.49998C10.83 8.49998 11.5 9.17199 11.5 10C11.5 10.828 10.83 11.5 10 11.5ZM10 16.5002C9.17096 16.5002 8.49998 15.8282 8.49998 15.0002C8.49998 14.1722 9.17096 13.5002 10 13.5002C10.83 13.5002 11.5 14.1722 11.5 15.0002C11.5 15.8282 10.83 16.5002 10 16.5002ZM10 0C4.47778 0 0 4.47778 0 10C0 15.5222 4.47778 20 10 20C15.5222 20 20 15.5222 20 10C20 4.47778 15.5222 0 10 0Z" fill="white" />
                    </svg>
                    <div class="dropdown">
                        <p class="dropdown-toggle header-dd overflow-hidden mb-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            More
                            <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8423 0.167368C14.0526 0.390524 14.0526 0.752333 13.8423 0.97549L7.38075 7.83263C7.17047 8.05579 6.82953 8.05579 6.61925 7.83263L0.157711 0.97549C-0.0525703 0.752333 -0.0525703 0.390524 0.157711 0.167368C0.367994 -0.055789 0.708928 -0.055789 0.919211 0.167368L7 6.62045L13.0808 0.167368C13.2911 -0.0557892 13.632 -0.0557892 13.8423 0.167368Z" fill="white" />
                            </svg>
                        </p>
                        <div class="dropdown-menu py-0 more_show_header " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item dropdown-item-more" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.28571 13.9713V8.62945C6.28571 3.7902 17.7143 3.79014 17.7143 8.62952V13.9713C17.7143 14.0935 17.759 14.211 17.84 14.3024L20.5273 17.337C21.0988 17.9823 20.6407 19 19.7787 19H4.22131C3.35934 19 2.90121 17.9823 3.47267 17.337L6.16004 14.3024C6.24101 14.211 6.28571 14.0935 6.28571 13.9713Z" fill="#4FC6AF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2973 5.25428C17.5242 5.94696 18.4643 7.0682 18.4643 8.62952V13.8761L21.0888 16.8398C22.0889 17.9691 21.2871 19.75 19.7787 19.75H4.22131C2.71286 19.75 1.91113 17.9691 2.91119 16.8398L5.53571 13.8761V8.62945C5.53571 7.06816 6.47583 5.94693 7.7027 5.25427C8.91595 4.56929 10.4807 4.25 12 4.25C13.5193 4.25 15.084 4.56929 16.2973 5.25428ZM8.44016 6.56047C7.52417 7.07762 7.03571 7.77112 7.03571 8.62945V13.9713C7.03571 14.2774 6.9235 14.5715 6.72152 14.7996L4.03415 17.8343C3.89128 17.9956 4.00582 18.25 4.22131 18.25H19.7787C19.9942 18.25 20.1087 17.9956 19.9658 17.8343L17.2785 14.7996L17.84 14.3024L17.2785 14.7996C17.0765 14.5715 16.9643 14.2774 16.9643 13.9713V8.62952C16.9643 7.77115 16.4758 7.07763 15.5598 6.56047C14.6302 6.03563 13.3378 5.75 12 5.75C10.6622 5.75 9.36976 6.03563 8.44016 6.56047Z" fill="#4FC6AF" />
                                    <path d="M14 3.5C14 4.60457 13.1046 5.5 12 5.5C10.8954 5.5 10 4.60457 10 3.5C10 2.39543 10.8954 1.5 12 1.5C13.1046 1.5 14 2.39543 14 3.5Z" fill="#4FC6AF" />
                                    <path d="M15.4996 19C15.4996 19.7956 15.1308 20.5587 14.4745 21.1213C13.8181 21.6839 12.9278 22 11.9996 22C11.0713 22 10.1563 21.6839 9.4999 21.1213C8.84352 20.5587 8.5 19.7956 8.5 19H11.9996H15.4996Z" fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.75 18.25H16.2496V19C16.2496 20.0351 15.7689 20.9996 14.9626 21.6908C14.1598 22.3789 13.0926 22.75 11.9996 22.75C10.9117 22.75 9.81814 22.3819 9.01181 21.6908C8.19323 20.9891 7.75 20.0198 7.75 19L7.75 18.25ZM9.39798 19.75C9.51935 20.0445 9.71565 20.3184 9.988 20.5519C10.4944 20.986 11.231 21.25 11.9996 21.25C12.7631 21.25 13.4764 20.989 13.9864 20.5519C14.2624 20.3153 14.4642 20.0408 14.5908 19.75H9.39798Z" fill="#4FC6AF" />
                                </svg>
                                Notification Preferences</a>
                            <a class="dropdown-item dropdown-item-more" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23 12C23 5.94979 18.0502 1 12 1C5.94979 1 1 5.94979 1 12C1 18.0502 5.94979 23 12 23C12.9167 23 13.87 22.89 14.75 22.67C15.1533 22.56 15.3733 22.1567 15.2633 21.79C15.1533 21.3867 14.75 21.1667 14.3833 21.2767C13.6133 21.4233 12.8067 21.5333 12 21.5333C6.75688 21.5333 2.46667 17.2431 2.46667 12C2.46667 6.75688 6.75688 2.46667 12 2.46667C17.2431 2.46667 21.5333 6.75688 21.5333 12C21.5333 13.65 21.0933 15.2267 20.3233 16.6565L18.82 15.1531L17.28 20.7998L22.9267 19.2965L21.35 17.7198C22.45 15.9965 23 14.0531 23 11.9998V12Z" fill="#4FC6AF" />
                                    <path d="M12.7327 16.4009C12.9894 16.4009 13.2461 16.3276 13.4294 16.1443L14.8594 14.9709C15.1527 14.7143 15.3727 14.3476 15.4827 13.9443L15.9227 12.0376C16.0327 11.5243 16.1061 10.9743 16.1061 10.4609V9.43427C16.0327 7.1976 14.1994 5.36426 11.9261 5.40093C9.6894 5.4376 7.96606 7.34426 7.96606 9.58093V10.4609C7.96606 11.0109 8.0394 11.5243 8.1494 12.0376L8.5894 13.9443C8.66273 14.3476 8.88273 14.6776 9.21273 14.9709L10.6427 16.1443C10.8261 16.2909 11.0827 16.4009 11.3394 16.4009H12.7327Z" fill="#4FC6AF" />
                                    <path d="M11.2671 18.9667H13.1004C13.3204 18.9667 13.4671 18.8201 13.4671 18.6001V18.4901C15.9971 17.9767 17.8671 15.7767 17.8671 13.1003V12.7336C18.2704 12.7336 18.6004 12.4036 18.6004 12.0003V10.1669C18.6004 9.76359 18.2704 9.43359 17.8671 9.43359H17.5004C17.5004 6.39026 15.0438 3.93359 12.0004 3.93359C9.06708 3.93359 6.72042 6.20693 6.53687 9.06693H6.13354C5.73021 9.06693 5.40021 9.39693 5.40021 9.80026V11.6336C5.40021 12.0369 5.73021 12.3669 6.13354 12.3669H6.86687C7.08687 12.3669 7.23354 12.2203 7.23354 12.0003V9.43359C7.23354 6.79359 9.36021 4.66693 12.0002 4.66693C14.6402 4.66693 16.7669 6.79359 16.7669 9.43359V12.3669C16.7669 12.5869 16.9135 12.7336 17.1335 12.7336V13.1003C17.1335 15.3736 15.5569 17.2436 13.4302 17.7567C13.3935 17.6101 13.2835 17.5001 13.1002 17.5001H11.2669C11.0469 17.5001 10.9002 17.6467 10.9002 17.8667V18.6001C10.9002 18.8201 11.0469 18.9667 11.2669 18.9667H11.2671Z" fill="#4FC6AF" />
                                </svg>
                                24x7 Customer Care</a>
                            <a class="dropdown-item dropdown-item-more" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2_57549)">
                                        <path d="M2.00275 7.00195C2.00292 4.24053 4.24163 2.00209 7.00305 2.00225L17.0002 2.00286C19.7616 2.00302 22 4.24173 21.9999 7.00316L21.9993 17.0003C21.9991 19.7617 19.7604 22.0001 16.999 22L7.00184 21.9994C4.24042 21.9992 2.00198 19.7605 2.00215 16.9991L2.00275 7.00195Z" fill="#4FC6AF" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.25277 7.00195C1.25296 3.82631 3.82748 1.25211 7.00311 1.2523L17.0002 1.2529C20.1759 1.25309 22.7501 3.82761 22.7499 7.00325L22.7493 17.0004C22.7491 20.176 20.1746 22.7502 16.9989 22.75L7.00181 22.7494C3.82618 22.7492 1.25197 20.1747 1.25216 16.9991L1.25277 7.00195ZM7.00302 2.7523C4.65581 2.75216 2.75291 4.65483 2.75277 7.00204L2.75216 16.9992C2.75202 19.3464 4.6547 21.2493 7.0019 21.2494L16.999 21.25C19.3462 21.2502 21.2491 19.3475 21.2493 17.0003L21.2499 7.00316C21.25 4.65595 19.3473 2.75304 17.0001 2.7529L7.00302 2.7523Z" fill="#4FC6AF" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9996 5.53672C12.4139 5.53672 12.7496 5.87251 12.7496 6.28672V13.4281C12.7496 13.8423 12.4139 14.1781 11.9996 14.1781C11.5854 14.1781 11.2496 13.8423 11.2496 13.4281V6.28672C11.2496 5.87251 11.5854 5.53672 11.9996 5.53672Z" fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.84327 10.8176C8.10202 10.4942 8.57399 10.4417 8.89744 10.7005L11.9996 13.1822L15.1018 10.7005C15.4252 10.4417 15.8972 10.4942 16.156 10.8176C16.4147 11.1411 16.3623 11.613 16.0388 11.8718L12.5306 14.6783C12.2201 14.9267 11.779 14.9267 11.4686 14.6783L7.9604 11.8718C7.63695 11.613 7.58451 11.1411 7.84327 10.8176Z" fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.96478 17.7129C6.96478 17.2987 7.30057 16.9629 7.71478 16.9629H16.2845C16.6987 16.9629 17.0345 17.2987 17.0345 17.7129C17.0345 18.1271 16.6987 18.4629 16.2845 18.4629H7.71478C7.30057 18.4629 6.96478 18.1271 6.96478 17.7129Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2_57549">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg> Download App</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>