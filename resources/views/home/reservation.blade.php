@extends('layouts.home')

@section('title','Laravel E-Ticaret dsfsdf')

@section('content')

    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">Booking</h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500"><a href="index.html" class="text-custom-white">Home</a></li>
                        <li class="active fw-500">Booking </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- End Subheader -->
    <!-- Start Blog -->
    <section class="section-padding bg-light-white booking-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tabs">
                        <div class="tab-content bg-custom-white bx-wrapper padding-20">
                            <div class="tab-pane fade active show">
                                <div class="tab-inner">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h5 class="text-custom-black">Your Personal Information</h5>
                                            <div class="row mb-md-80">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="fs-14 text-custom-black fw-500">First Name</label><input
                                                            type="text" name="#" class="form-control form-control-custom" placeholder="First Name"
                                                            required></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="fs-14 text-custom-black fw-500">Last Name</label><input
                                                            type="text" name="#" class="form-control form-control-custom" placeholder="Last Name"
                                                            required></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="fs-14 text-custom-black fw-500">Email I'd</label>
                                                        <input type="email" name="#" class="form-control form-control-custom"
                                                               placeholder="Email I'd" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Verify Email I'd</label>
                                                        <input type="email" name="#" class="form-control form-control-custom"
                                                               placeholder="Email I'd" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Country Code</label>
                                                        <div class="group-form">
                                                            <select class="custom-select form-control form-control-custom">
                                                                <option value="Afghanistan">Afghanistan</option>
                                                                <option value="Åland Islands">Åland Islands</option>
                                                                <option value="Albania">Albania</option>
                                                                <option value="Algeria">Algeria</option>
                                                                <option value="American Samoa">American Samoa</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Angola">Angola</option>
                                                                <option value="Anguilla">Anguilla</option>
                                                                <option value="Antarctica">Antarctica</option>
                                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Armenia">Armenia</option>
                                                                <option value="Aruba">Aruba</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>
                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                <option value="Bahamas">Bahamas</option>
                                                                <option value="Bahrain">Bahrain</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Barbados">Barbados</option>
                                                                <option value="Belarus">Belarus</option>
                                                                <option value="Belgium">Belgium</option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benin">Benin</option>
                                                                <option value="Bermuda">Bermuda</option>
                                                                <option value="Bhutan">Bhutan</option>
                                                                <option value="Bolivia">Bolivia</option>
                                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Bouvet Island">Bouvet Island</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                <option value="Bulgaria">Bulgaria</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Cape Verde">Cape Verde</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Central African Republic">Central African Republic</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island</option>
                                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Comoros">Comoros</option>
                                                                <option value="Congo">Congo</option>
                                                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of
                                                                    The</option>
                                                                <option value="Cook Islands">Cook Islands</option>
                                                                <option value="Costa Rica">Costa Rica</option>
                                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                                <option value="Croatia">Croatia</option>
                                                                <option value="Cuba">Cuba</option>
                                                                <option value="Cyprus">Cyprus</option>
                                                                <option value="Czech Republic">Czech Republic</option>
                                                                <option value="Denmark">Denmark</option>
                                                                <option value="Djibouti">Djibouti</option>
                                                                <option value="Dominica">Dominica</option>
                                                                <option value="Dominican Republic">Dominican Republic</option>
                                                                <option value="Ecuador">Ecuador</option>
                                                                <option value="Egypt">Egypt</option>
                                                                <option value="El Salvador">El Salvador</option>
                                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                <option value="Eritrea">Eritrea</option>
                                                                <option value="Estonia">Estonia</option>
                                                                <option value="Ethiopia">Ethiopia</option>
                                                                <option value="Falkland Islands(Malvinas)">Falkland Islands (Malvinas)</option>
                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                <option value="Fiji">Fiji</option>
                                                                <option value="Finland">Finland</option>
                                                                <option value="France">France</option>
                                                                <option value="French Guiana">French Guiana</option>
                                                                <option value="French Polynesia">French Polynesia</option>
                                                                <option value="French Southern Territories">French Southern Territories</option>
                                                                <option value="Gabon">Gabon</option>
                                                                <option value="Gambia">Gambia</option>
                                                                <option value="Georgia">Georgia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Ghana">Ghana</option>
                                                                <option value="Gibraltar">Gibraltar</option>
                                                                <option value="Greece">Greece</option>
                                                                <option value="Greenland">Greenland</option>
                                                                <option value="Grenada">Grenada</option>
                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                <option value="Guam">Guam</option>
                                                                <option value="Guatemala">Guatemala</option>
                                                                <option value="Guernsey">Guernsey</option>
                                                                <option value="Guinea">Guinea</option>
                                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                                <option value="Guyana">Guyana</option>
                                                                <option value="Haiti">Haiti</option>
                                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                                                                </option>
                                                                <option value="Holy See(Vatican City State)">Holy See (Vatican City State)</option>
                                                                <option value="Honduras">Honduras</option>
                                                                <option value="Hong Kong">Hong Kong</option>
                                                                <option value="Hungary">Hungary</option>
                                                                <option value="Iceland">Iceland</option>
                                                                <option value="India">India</option>
                                                                <option value="Indonesia">Indonesia</option>
                                                                <option value="Iran,Islamic Republic of">Iran, Islamic Republic of</option>
                                                                <option value="Iraq">Iraq</option>
                                                                <option value="Ireland">Ireland</option>
                                                                <option value="Isle of Man">Isle of Man</option>
                                                                <option value="Israel">Israel</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Jamaica">Jamaica</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="Jersey">Jersey</option>
                                                                <option value="Jordan">Jordan</option>
                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                <option value="Kenya">Kenya</option>
                                                                <option value="Kiribati">Kiribati</option>
                                                                <option value="Korea,Democratic People's Republic of">Korea, Democratic People's
                                                                    Republic of</option>
                                                                <option value="Korea, Republic of">Korea,Republic of</option>
                                                                <option value="Kuwait">Kuwait</option>
                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                                                </option>
                                                                <option value="Latvia">Latvia</option>
                                                                <option value="Lebanon">Lebanon</option>
                                                                <option value="Lesotho">Lesotho</option>
                                                                <option value="Liberia">Liberia</option>
                                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                <option value="Lithuania">Lithuania</option>
                                                                <option value="Luxembourg">Luxembourg</option>
                                                                <option value="Macao">Macao</option>
                                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                                                    Yugoslav Republic of</option>
                                                                <option value="Madagascar">Madagascar</option>
                                                                <option value="Malawi">Malawi</option>
                                                                <option value="Malaysia">Malaysia</option>
                                                                <option value="Maldives">Maldives</option>
                                                                <option value="Mali">Mali</option>
                                                                <option value="Malta">Malta</option>
                                                                <option value="Marshall Islands">Marshall Islands</option>
                                                                <option value="Martinique">Martinique</option>
                                                                <option value="Mauritania">Mauritania</option>
                                                                <option value="Mauritius">Mauritius</option>
                                                                <option value="Mayotte">Mayotte</option>
                                                                <option value="Mexico">Mexico</option>
                                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                                <option value="Monaco">Monaco</option>
                                                                <option value="Mongolia">Mongolia</option>
                                                                <option value="Montenegro">Montenegro</option>
                                                                <option value="Montserrat">Montserrat</option>
                                                                <option value="Morocco">Morocco</option>
                                                                <option value="Mozambique">Mozambique</option>
                                                                <option value="Myanmar">Myanmar</option>
                                                                <option value="Namibia">Namibia</option>
                                                                <option value="Nauru">Nauru</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="Netherlands">Netherlands</option>
                                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                <option value="New Caledonia">New Caledonia</option>
                                                                <option value="New Zealand">New Zealand</option>
                                                                <option value="Nicaragua">Nicaragua</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                                <option value="Niue">Niue</option>
                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                <option value="Norway">Norway</option>
                                                                <option value="Oman">Oman</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Palau">Palau</option>
                                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                                <option value="Panama">Panama</option>
                                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                                <option value="Paraguay">Paraguay</option>
                                                                <option value="Peru">Peru</option>
                                                                <option value="Philippines">Philippines</option>
                                                                <option value="Pitcairn">Pitcairn</option>
                                                                <option value="Poland">Poland</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                <option value="Qatar">Qatar</option>
                                                                <option value="Reunion">Reunion</option>
                                                                <option value="Romania">Romania</option>
                                                                <option value="Russian Federation">Russian Federation</option>
                                                                <option value="Rwanda">Rwanda</option>
                                                                <option value="Saint Helena">Saint Helena</option>
                                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                <option value="Saint Lucia">Saint Lucia</option>
                                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines
                                                                </option>
                                                                <option value="Samoa">Samoa</option>
                                                                <option value="San Marino">San Marino</option>
                                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                <option value="Senegal">Senegal</option>
                                                                <option value="Serbia">Serbia</option>
                                                                <option value="Seychelles">Seychelles</option>
                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                <option value="Singapore">Singapore</option>
                                                                <option value="Slovakia">Slovakia</option>
                                                                <option value="Slovenia">Slovenia</option>
                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                <option value="Somalia">Somalia</option>
                                                                <option value="South Africa">South Africa</option>
                                                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South
                                                                    Sandwich Islands</option>
                                                                <option value="Spain">Spain</option>
                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                <option value="Sudan">Sudan</option>
                                                                <option value="Suriname">Suriname</option>
                                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                                <option value="Swaziland">Swaziland</option>
                                                                <option value="Sweden">Sweden</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                                <option value="Tajikistan">Tajikistan</option>
                                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                                <option value="Thailand">Thailand</option>
                                                                <option value="Timor-leste">Timor-leste</option>
                                                                <option value="Togo">Togo</option>
                                                                <option value="Tokelau">Tokelau</option>
                                                                <option value="Tonga">Tonga</option>
                                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                <option value="Tunisia">Tunisia</option>
                                                                <option value="Turkey">Turkey</option>
                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                                <option value="Tuvalu">Tuvalu</option>
                                                                <option value="Uganda">Uganda</option>
                                                                <option value="Ukraine">Ukraine</option>
                                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="United States">United States</option>
                                                                <option value="United States Minor Outlying Islands">United States Minor Outlying
                                                                    Islands</option>
                                                                <option value="Uruguay">Uruguay</option>
                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                <option value="Vanuatu">Vanuatu</option>
                                                                <option value="Venezuela">Venezuela</option>
                                                                <option value="Viet Nam">Viet Nam</option>
                                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                                <option value="Western Sahara">Western Sahara</option>
                                                                <option value="Yemen">Yemen</option>
                                                                <option value="Zambia">Zambia</option>
                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Phone No.</label>
                                                        <input type="email" name="#" class="form-control form-control-custom"
                                                               placeholder="Phone No." required>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label class="custom-checkbox mb-0">
                                                        <input type="checkbox" name="#">
                                                        <span class="checkmark"></span> I want to receive <a href="#"
                                                                                                             class="text-custom-blue">Company name</a> promotional offers in the future </label>
                                                </div>
                                                <div class="col-12">
                                                    <hr>
                                                </div>
                                                <div class="col-12">
                                                    <h5 class="text-custom-black">Your Card Information</h5>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Card Type</label>
                                                        <div class="group-form">
                                                            <select class="custom-select form-control form-control-custom">
                                                                <option>Select Card</option>
                                                                <option>Visa</option>
                                                                <option>Master Card</option>
                                                                <option>Credit Card</option>
                                                                <option>Americal Express</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Card Holder Name</label>
                                                        <input type="text" name="#" class="form-control form-control-custom"
                                                               placeholder="Card Holder Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Card Number</label>
                                                        <input type="text" name="#" class="form-control form-control-custom"
                                                               placeholder="Card Number" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Card Identification Number</label>
                                                        <input type="text" name="#" class="form-control form-control-custom"
                                                               placeholder="Card Identification Number" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="fs-14 text-custom-black fw-500">Expiration Month</label>
                                                                <div class="group-form">
                                                                    <select class="custom-select form-control form-control-custom">
                                                                        <option>Month</option>
                                                                        <option>Jan</option>
                                                                        <option>Feb</option>
                                                                        <option>Mar</option>
                                                                        <option>Apr</option>
                                                                        <option>May</option>
                                                                        <option>June</option>
                                                                        <option>July</option>
                                                                        <option>Aug</option>
                                                                        <option>Sep</option>
                                                                        <option>Oct</option>
                                                                        <option>Nov</option>
                                                                        <option>Dec</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="fs-14 text-custom-black fw-500">Expiration Year</label>
                                                                <div class="group-form">
                                                                    <select class="custom-select form-control form-control-custom">
                                                                        <option>2020</option>
                                                                        <option>2021</option>
                                                                        <option>2022</option>
                                                                        <option>2023</option>
                                                                        <option>2024</option>
                                                                        <option>2025</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Billing Zip Code</label>
                                                        <input type="text" name="#" class="form-control form-control-custom"
                                                               placeholder="Billing Zip Code" required>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <hr class="mt-0">
                                                    <h5 class="text-custom-black">Arrival/Flight Information</h5>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Airline Name</label>
                                                        <div class="group-form">
                                                            <select class="custom-select form-control form-control-custom">
                                                                <option>Major Airline</option>
                                                                <option>United Airlines</option>
                                                                <option>Alitalia</option>
                                                                <option>US Airways</option>
                                                                <option>Air France</option>
                                                                <option>Air India</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Arriving Number</label>
                                                        <input type="text" name="#" class="form-control form-control-custom"
                                                               placeholder="Arriving Number">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <hr class="mt-0">
                                                    <div class="form-group">
                                                        <label class="custom-checkbox">
                                                            <input type="checkbox" name="#">
                                                            <span class="checkmark"></span> By continuing, you agree to the <a href="#"
                                                                                                                               class="text-custom-blue">Terms and Conditions.</a> </label>
                                                    </div>
                                                    <button type="submit" class="btn-first btn-submit">Confirm Booking</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="car-grid mb-xl-30">
                                                        <div class="car-grid-wrapper bx-wrapper">
                                                            <div class="image-sec animate-img"> <a href="#"> <img src="assets/images/cars/1.png"
                                                                                                                  class="full-width" alt="img"> </a> </div>
                                                            <div class="car-grid-caption padding-20 bg-custom-white p-relative">
                                                                <h4 class="title fs-16"><a href="#" class="text-custom-black">Economy<small
                                                                            class="text-light-dark">Per Day</small></a></h4>
                                                                <span class="price"><small>From</small>$58</span>
                                                                <div class="action"> <a class="btn-second btn-small" href="#">View</a> <a
                                                                        class="btn-first btn-submit" href="#">Book</a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="need-help bx-wrapper padding-20">
                                                        <h5 class="text-custom-black">Need Help?.</h5>
                                                        <p class="text-light-dark">We would be more than happy to help you. Our team advisor are
                                                            24/7 at your service to help you.</p>
                                                        <ul class="custom">
                                                            <li class="text-custom-blue fs-18"> <i class="fas fa-phone-alt"></i> <a href="#"
                                                                                                                                    class="text-light-dark">(+347) 123 456 7890</a> </li>
                                                            <li class="text-custom-blue fs-18"> <i class="fas fa-envelope"></i> <a href="#"
                                                                                                                                   class="text-light-dark fs-14">help@domain.com</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog -->
    <!-- Start Partners -->
    <section class="section-padding partners">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-heading">
                    <h3 class="text-custom-black">Our Partners</h3>
                    <div class="section-description">
                        <p class="text-light-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="partners-slider arrow-layout-2 row">
                        <div class="slide-item col-12">
                            <div class="partner-box bx-wrapper animate-img"><a href="#"><img src="assets/images/logo-1-t.png"
                                                                                             class="img-fluid image-fit" alt="img"></a></div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="partner-box bx-wrapper animate-img"><a href="#"><img src="assets/images/logo-2.png"
                                                                                             class="img-fluid image-fit" alt="img"></a></div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="partner-box bx-wrapper animate-img"><a href="#"><img src="assets/images/logo-3.png"
                                                                                             class="img-fluid image-fit" alt="img"></a></div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="partner-box bx-wrapper animate-img"><a href="#"><img src="assets/images/logo-4.png"
                                                                                             class="img-fluid image-fit" alt="img"></a></div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="partner-box bx-wrapper animate-img"><a href="#"><img src="assets/images/logo-1-t.png"
                                                                                             class="img-fluid image-fit" alt="img"></a></div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="partner-box bx-wrapper animate-img"><a href="#"><img src="assets/images/logo-2.png"
                                                                                             class="img-fluid image-fit" alt="img"></a></div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="partner-box bx-wrapper animate-img"><a href="#"><img src="assets/images/logo-3.png"
                                                                                             class="img-fluid image-fit" alt="img"></a></div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="partner-box bx-wrapper animate-img"><a href="#"><img src="assets/images/logo-4.png"
                                                                                             class="img-fluid image-fit" alt="img"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Partners -->
@endsection
