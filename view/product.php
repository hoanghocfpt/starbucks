
        <div class="breadcrumb">
            <ol>
                <li><a href="#">Thực đơn</a></li>
                <li><a href="#">Danh mục</a></li>
                <li><?php echo $product_name ?></li>
            </ol>
        </div>

        <div class="product_container">
            <div class="header_product_container">
                <div class="product_img">
                    <img src="<?php echo $product_image ?>" alt="">
                </div>
                <div class="product_text">
                    <div class="product_name"><?php echo $product_name ?></div>
                    <div class="product_price"><?php echo number_format($product_price,0,',','.').'đ' ?></div>
                </div>
            </div>
            <div class="body_product_container">
                <div class="size_options">
                    <h2>Lựa chọn kích thức</h2>
                    <div class="size_option">
                        <div class="size_option_type size_option_S">
                            <input type="radio" name="size_option" id="">
                            <label for="">
                                <div class="circle">
                                    <svg width="24" height="40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 18h-.55a.55.55 0 0 0 .55.55V18Zm0-1.538v-.55a.55.55 0 0 0-.55.55H2Zm20 0h.55a.55.55 0 0 0-.55-.55v.55ZM22 18v.55a.55.55 0 0 0 .55-.55H22ZM3 16.462v.55a.55.55 0 0 0 .55-.518L3 16.462Zm17.952 0-.549.029a.55.55 0 0 0 .55.52v-.55ZM3 18v-.55.55Zm17.952 0v-.55.55Zm-1.35 18.609.548.04-.549-.04Zm-14.737.04-.547.055.547-.055ZM2.55 18v-1.538h-1.1V18h1.1Zm18.9-1.538V18h1.1v-1.538h-1.1ZM2 17.012h1v-1.1H2v1.1Zm1-.55.55.032v-.015l.005-.062c.006-.055.014-.14.028-.248.029-.217.079-.53.164-.908.172-.758.484-1.762 1.045-2.761C5.9 10.528 7.981 8.55 12 8.55v-1.1c-4.48 0-6.899 2.252-8.167 4.512a11.49 11.49 0 0 0-1.158 3.056 11.155 11.155 0 0 0-.215 1.298 4.77 4.77 0 0 0-.008.103V16.428c-.001 0-.001.001.548.034Zm9-7.912c4.019 0 6.088 1.978 7.183 3.948a10.33 10.33 0 0 1 1.029 2.76 10.027 10.027 0 0 1 .185 1.156 3.584 3.584 0 0 1 .006.075v.003l.55-.03.549-.03v-.004l-.001-.006c0-.006 0-.013-.002-.023a5.37 5.37 0 0 0-.037-.37c-.03-.245-.084-.593-.176-1.008-.183-.829-.52-1.94-1.142-3.057C18.889 9.703 16.482 7.45 12 7.45v1.1Zm8.952 8.462H22v-1.1h-1.048v1.1ZM3 17.45H2v1.1h1v-1.1Zm19 0h-1.048v1.1H22v-1.1Zm-1.596.51L19.052 36.57l1.098.08 1.35-18.61-1.096-.079Zm-2.299 19.49H6.358v1.1h11.747v-1.1Zm2.847-20H3v1.1h17.952v-1.1ZM5.412 36.594 3.547 17.945l-1.094.11 1.865 18.649 1.094-.11Zm13.64-.025a.95.95 0 0 1-.947.881v1.1a2.05 2.05 0 0 0 2.045-1.901l-1.098-.08Zm-12.694.881a.95.95 0 0 1-.946-.856l-1.094.11a2.05 2.05 0 0 0 2.04 1.846v-1.1Z" fill="#6B6B6B"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12 29.9a3.9 3.9 0 1 0 0-7.8 3.9 3.9 0 0 0 0 7.8Zm0 1.1a5 5 0 1 0 0-10 5 5 0 0 0 0 10Z" fill="#6B6B6B"/></svg>
                                </div>
                            </label>
                            <span class="size_name">Nhỏ</span>
                        </div>
                        <div class="size_option_type size_option_M">
                            <input type="radio" name="size_option" id="">
                            <label for="">
                                <div class="circle">
                                    <svg width="24" height="40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 14v-.55h-.606l.059.604L3 14Zm18 0 .549.036.038-.586H21V14ZM5.25 37.007l-.547.054.548-.054Zm14.252-.035-.549-.036.549.036ZM3 14.55h18v-1.1H3v1.1Zm17.451-.586-1.498 22.972 1.098.071 1.498-22.971-1.098-.072ZM18.404 37.45H6.345v1.1h12.06v-1.1Zm-12.606-.497-2.25-23.007-1.095.107 2.25 23.008 1.095-.108Zm.547.497a.55.55 0 0 1-.547-.497l-1.095.108a1.65 1.65 0 0 0 1.642 1.489v-1.1Zm12.608-.514a.55.55 0 0 1-.549.514v1.1c.87 0 1.59-.675 1.647-1.543l-1.098-.071Z" fill="#6B6B6B"/><path d="M2 14h-.55c0 .304.246.55.55.55V14Zm0-1.538v-.55a.55.55 0 0 0-.55.55H2Zm20 0h.55a.55.55 0 0 0-.55-.55v.55ZM22 14v.55a.55.55 0 0 0 .55-.55H22ZM3 12.462v.55a.55.55 0 0 0 .55-.518L3 12.462Zm17.952 0-.549.029a.55.55 0 0 0 .55.52v-.55ZM2.55 14v-1.538h-1.1V14h1.1Zm18.9-1.538V14h1.1v-1.538h-1.1Zm.55.988H2v1.1h20v-1.1Zm-20-.438h1v-1.1H2v1.1Zm1-.55.55.032v-.015l.005-.062c.006-.055.014-.14.028-.248.029-.217.079-.53.164-.908.172-.758.484-1.762 1.045-2.761C5.9 6.528 7.981 4.55 12 4.55v-1.1c-4.48 0-6.899 2.252-8.167 4.512a11.491 11.491 0 0 0-1.158 3.056 11.155 11.155 0 0 0-.215 1.298 4.77 4.77 0 0 0-.008.103V12.428c-.001 0-.001.001.548.034Zm9-7.912c4.019 0 6.088 1.978 7.183 3.948.555.998.861 2.002 1.029 2.76a10.027 10.027 0 0 1 .185 1.156 3.584 3.584 0 0 1 .006.075v.003l.55-.03.549-.03v-.003l-.001-.007c0-.006 0-.013-.002-.023a5.37 5.37 0 0 0-.037-.37c-.03-.245-.084-.593-.176-1.008-.183-.829-.52-1.94-1.142-3.057C18.889 5.703 16.482 3.45 12 3.45v1.1Zm8.952 8.462H22v-1.1h-1.048v1.1Z" fill="#6B6B6B"/><circle cx="12" cy="23.5" r="4.95" stroke="#6B6B6B" stroke-width="1.1"/></svg>
                                </div>
                            </label>
                            <span class="size_name">Vừa</span>
                        </div>
                        <div class="size_option_type size_option_L">
                            <input type="radio" name="size_option" id="">
                            <label for="">
                                <div class="circle">
                                    <svg width="24" height="40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 11v-.55h-.6l.052.598L3 11Zm18 0 .55.032.033-.582H21V11ZM5.26 36.995l-.547.048.547-.048Zm14.235-.031.549.032-.55-.032ZM3 11.55h18v-1.1H3v1.1Zm17.45-.582-1.504 25.964 1.098.063 1.505-25.963-1.098-.064ZM18.398 37.45H6.357v1.1h12.04v-1.1Zm-12.589-.502-2.26-25.996-1.096.096 2.26 25.995 1.096-.095Zm.548.502a.55.55 0 0 1-.548-.502l-1.095.095a1.65 1.65 0 0 0 1.643 1.507v-1.1Zm12.59-.518a.55.55 0 0 1-.55.518v1.1a1.65 1.65 0 0 0 1.648-1.554l-1.098-.064Z" fill="#6B6B6B"/><path d="M2 11h-.55c0 .304.246.55.55.55V11Zm0-1.538v-.55a.55.55 0 0 0-.55.55H2Zm20 0h.55a.55.55 0 0 0-.55-.55v.55ZM22 11v.55a.55.55 0 0 0 .55-.55H22ZM3 9.462v.55a.55.55 0 0 0 .55-.518L3 9.462Zm17.952 0-.549.029a.55.55 0 0 0 .55.52v-.55ZM2.55 11V9.462h-1.1V11h1.1Zm18.9-1.538V11h1.1V9.462h-1.1Zm.55.988H2v1.1h20v-1.1Zm-20-.438h1v-1.1H2v1.1Zm1-.55.55.032V9.48l.005-.062c.006-.055.014-.14.028-.248.029-.217.079-.53.164-.908.172-.758.484-1.762 1.045-2.761C5.9 3.528 7.981 1.55 12 1.55V.45c-4.48 0-6.899 2.252-8.167 4.512a11.49 11.49 0 0 0-1.158 3.056 11.155 11.155 0 0 0-.215 1.298 4.737 4.737 0 0 0-.008.103V9.428c-.001 0-.001.001.548.034Zm9-7.912c4.019 0 6.088 1.978 7.183 3.948.555.998.861 2.002 1.029 2.76a10.028 10.028 0 0 1 .185 1.156 3.573 3.573 0 0 1 .006.075v.003l.55-.03.549-.03v-.003l-.001-.007c0-.006 0-.013-.002-.023a5.436 5.436 0 0 0-.037-.37c-.03-.245-.084-.593-.176-1.008-.183-.829-.52-1.94-1.142-3.057C18.889 2.703 16.482.45 12 .45v1.1Zm8.952 8.462H22v-1.1h-1.048v1.1Z" fill="#6B6B6B"/><circle cx="12" cy="20.5" r="4.95" stroke="#6B6B6B" stroke-width="1.1"/></svg>   
                                </div>
                            </label>
                            <span class="size_name">Lớn</span>
                        </div>
                    </div>
                </div>
                <div class="included">
                    <h2>Tuỳ chọn thêm</h2>
                    <div class="included_container">
                        <form action="">
                            <div class="fieldBase">
                                <div class="input_select">
                                    <label for="">Đường</label>
                                    <select name="sugar" id="">
                                        <option value="1">30%</option>
                                        <option value="2">50%</option>
                                        <option value="3">70%</option>
                                        <option value="4">100%</option>
                                    </select>
                                    <span class="inputSelect">30%</span>
                                    <svg aria-hidden="true" class="valign-middle color-textBlackSoft caretIcon self-center ml-auto" focusable="false" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" style="width: 24px; height: 24px; overflow: visible; fill: currentcolor;"><path d="M11.96 15.5c-.206 0-.402-.084-.546-.232l-5.188-5.33c-.3-.31-.3-.81 0-1.12.3-.31.79-.31 1.093 0l4.64 4.767 4.723-4.853c.3-.31.79-.31 1.09 0 .303.31.303.812.002 1.122l-5.27 5.414c-.145.148-.34.232-.546.232"></path></svg>
                                </div>
                            </div>
                            <div class="fieldBase">
                                <div class="input_select">
                                    <label for="">Đá</label>
                                    <select name="sugar" id="">
                                        <option value="1">Ít</option>
                                        <option value="2">Vừa</option>
                                        <option value="3">Nhiều</option>
                                        
                                    </select>
                                    <span class="inputSelect">Vừa</span>
                                    <svg aria-hidden="true" class="valign-middle color-textBlackSoft caretIcon self-center ml-auto" focusable="false" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" style="width: 24px; height: 24px; overflow: visible; fill: currentcolor;"><path d="M11.96 15.5c-.206 0-.402-.084-.546-.232l-5.188-5.33c-.3-.31-.3-.81 0-1.12.3-.31.79-.31 1.093 0l4.64 4.767 4.723-4.853c.3-.31.79-.31 1.09 0 .303.31.303.812.002 1.122l-5.27 5.414c-.145.148-.34.232-.546.232"></path></svg>
                                </div>
                            </div>

                            <div class="fieldBase">
                                <div class="input_number">
                                    <label for="">Số lượng</label>
                                    <input type="text" value="1" name="quantity" id="">
                                    <div class="plus_minus">
                                        
                                        <div class="minus">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                <path fill-rule="evenodd" d="M3.75 12a.75.75 0 01.75-.75h15a.75.75 0 010 1.5h-15a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                                            </svg>                                                                                            
                                        </div>
                                        <div class="plus">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                                            </svg>                                              
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input type="submit" class="btn_add_to_cart" value="Thêm vào giỏ hàng">
                        </form>
                    </div>
                </div>
            </div>
            

        </div>

