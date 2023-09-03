
        <div class="signup">
            <h1>Tạo một tài khoản</h1>
            <div class="signup_container">
                <span>* chỉ ra trường bắt buộc</span>
                <form action="" method="post">
                    <div class="personal_information">
                        <h3>Thông tin cá nhân</h3>
                        <div class="fieldBase">
                            <div class="input_text">
                                <input type="text" value="" name="firstname" id="firstname" required>
                                <label class="label" for="">* Tên của bạn</label>
                            </div>    
                        </div>
                        <div class="fieldStatus_text errorinputfirstname"></div>
                        <div class="fieldBase">
                            <div class="input_text">
                                <input type="text" value="" name="lastname" id="lastname" required>
                                <label class="label" for="">* Họ của bạn</label>
                            </div>
                        </div>
                        <div class="fieldStatus_text errorinputlastname"></div>
                    </div>
                    <div class="personal_information">
                        <h3>Bảo mật tài khoản</h3>
                        <div class="fieldBase">
                            <div class="input_text">
                                <input type="text" value="" name="email" id="email" required>
                                <label class="label" for="">* Địa chỉ email</label>
                            </div>
                        </div>
                        <div class="fieldStatus_text errorinputemail"></div>
                        <div class="fieldBase">
                            <div class="input_password">
                                <input type="password" value="" name="password" id="password" required>
                                <div class="show_password">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                                    </svg>                                  
                                </div>
                                <label for="">* Mật khẩu</label>
                            </div>
                        </div>
                        <div class="fieldStatus_text errorinputpassword"></div>
                    </div>
                    
                    <div class="checkbox">
                        <h4>ĐIỀU KHOẢN SỬ DỤNG</h4>
                        <input type="checkbox" name="" id="">
                        <label for="">
                            <div class="check_box">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>                                  
                            </div>
                            <span class="option__labelText">Tôi đồng ý với <a href="#">Điều khoản phần thưởng Starbucks®</a> và <a href="#">Điều khoản thẻ Starbucks</a> và đã đọc <a href="#">Tuyên bố về Quyền riêng tư của Starbucks</a></span>
                        </label>
                    </div>
                    <div class="btn_signup">
                        <input type="submit" name="signup" value="Tạo tài khoản" onsubmit="validFormSignup()">
                    </div>
                </form>

            </div>
   
        </div>


 