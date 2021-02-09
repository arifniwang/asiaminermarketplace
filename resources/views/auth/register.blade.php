@extends('../layout')
@section('content')
<style>
  .bootstrap-select > button{
  background-color:white !important; 
  border-color: #CED4DA !important; 
  padding-top:8px; 
  padding-bottom:9px;
  }
  .bootstrap-select > option {
    display:none;
  }
</style>
    <div class="site-section bg-light">
      <div class="container">
        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{$error}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endforeach
                @endif 
        <div class="row mt-5">
          <div class="col-md-1"></div>
          
          <div class="col-md-10 mb-5">
            <form method="POST" action="{{ route('register') }}" class="p-5 bg-white">
             @csrf
             <div class="row form-group">
               <div class="col-md-12 mb-3 mb-md-0">
                 <h4 style="text-align: left;"><b>User Registration</b> </h4>
                  <h6>Regist as a visitor to access directory, resources, products and more..</h6>
               </div>
             </div>
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input name="first_name" type="text" id="fname" class="form-control" value="{{old('first_name')}}" required>
                  @error('first_name')
                    {{$message}}
                  @enderror
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input name="last_name" type="text" id="lname" class="form-control" value="{{old('last_name')}}" required="">
                  @error('last_name')
                    {{$message}}
                  @enderror
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6">
                  <label class="text-black" for="email">Username</label> 
                  <input type="text" name="username" id="username" class="form-control" value="{{old('username')}}" required="">
                  @error('username')
                    {{$message}}
                  @enderror
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="email">Email Address</label> 
                  <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" required="">
                  @error('email')
                    {{$message}}
                  @enderror
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6">
                  <label class="text-black" for="email">Phone Number</label> 
                  <input type="Number" id="pnumber" name="cell" class="form-control" value="{{old('cell')}}" required="">
                  @error('cell')
                    {{$message}}
                  @enderror
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="email">Position at Company</label> 
                  <input type="text" id="position" name="position" class="form-control"  value="{{old('position')}}" required="">
                </div>
              </div>
              
              <div class="row form-group">
                <div class="col-md-6">
                  <label class="text-black" for="email">Password</label> 
                  <input type="password" name="password" id="pass1" class="form-control" required="">
                  @error('password')
                    {{$message}}
                  @enderror
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="email">Re-type Password</label> 
                  <input type="password" name="password_confirmation" id="pass2" class="form-control" required="">
                </div>
              </div>

              <div class="row form-group mt-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <h4 style="text-align: left;"><b>Company Detail</b> </h4>
                   <h6>To regist as a visitor you must insert your company data</h6>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6">
                  <label class="text-black" for="email">Company Name</label> 
                  <input type="text" id="companyname" name="company_name" class="form-control"  value="{{old('company_name')}}" required="">
                  @error('company_name')
                    {{$message}}
                  @enderror
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="email">Company Catagory</label> 
                  <select class="selectpicker form-control" name="ccatagory_id" data-live-search="true" id="" required="">
                    @php 
                    $ccategory = \App\CCatagory::all();
                    @endphp
                    <option value="">Select Category</option>
                    @foreach ($ccategory as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                  </select>
                  @error('ccatagory_id')
                    {{$message}}
                  @enderror
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-6">
                  <label class="text-black" for="email">Company Country</label>
                  <select name="country" class="selectpicker countries form-control" data-live-search="true" id="countryId"> 
                    <option value="">Select Country</option>
                  </select>
                  @error('country')
                  {{$message}}
                  @enderror
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="email">Company State</label>
                  <select name="state" class="selectpicker states form-control" data-live-search="true" id="stateId"> 
                    <option value="">Select State</option>
                  </select>
                  @error('state')
                  {{$message}}
                  @enderror
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-6">
                  <label class="text-black" for="email">Company City</label>
                  <select name="city" class="selectpicker cities form-control" data-live-search="true" id="cityId"> 
                    <option value="">Select city</option>
                    <option value="{{old('company_city')}}">{{old('company_city')}}</option>

                  </select>
                  @error('city')
                  {{$message}}
                  @enderror
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="email">Zip / Postal Code</label> 
                  <input type="text" id="postcode" name="postal_code" value="{{ old('postal_code') }}" class="form-control" required="">
                  @error('postal_code')
                  {{$message}}
                  @enderror
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Company Address</label> 
                  <input type="textarea" id="adress" name="address" class="form-control" value="{{ old('address') }}" required="">
                  @error('address')
                    {{$message}}
                  @enderror
                </div>
              </div>

       


                  <input type="checkbox" id="agree" name="agree" value="agree" required="">
                  <label for="agree">I Agree to </label>
                  <a href="" data-toggle="modal" data-target="#terms">The Terms and Condition</a>

                  <div class="row form-group">
                    <input type="submit" value="Register" class="btn btn-primary btn-md text-white mb-3 mt-2">
                  </div>
              
  
            </form>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">term and condition</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="text-align: center;">
        <style>
      [data-custom-class='body'], [data-custom-class='body'] * {
              background: transparent !important;
            }
    [data-custom-class='title'], [data-custom-class='title'] * {
              font-family: Arial !important;
    font-size: 26px !important;
    color: #000000 !important;
            }
    [data-custom-class='subtitle'], [data-custom-class='subtitle'] * {
              font-family: Arial !important;
    color: #595959 !important;
    font-size: 14px !important;
            }
    [data-custom-class='heading_1'], [data-custom-class='heading_1'] * {
              font-family: Arial !important;
    font-size: 19px !important;
    color: #000000 !important;
            }
    [data-custom-class='heading_2'], [data-custom-class='heading_2'] * {
              font-family: Arial !important;
    font-size: 17px !important;
    color: #000000 !important;
            }
    [data-custom-class='body_text'], [data-custom-class='body_text'] * {
              color: #595959 !important;
    font-size: 14px !important;
    font-family: Arial !important;
            }
    [data-custom-class='link'], [data-custom-class='link'] * {
              color: #3030F1 !important;
    font-size: 14px !important;
    font-family: Arial !important;
    word-break: break-word !important;
            }
    </style>
    
          <div data-custom-class="body">
          <div align="center" style="text-align: left; line-height: 1;"><div align="center" class="MsoNormal" style="text-align: left; line-height: 150%;"><div align="center" class="MsoNormal" style="text-align:center;line-height:150%;"><a name="_2cipo4yr3w5d"></a><div align="center" class="MsoNormal" style="line-height: 22.5px;"><div align="center" class="MsoNormal" style="line-height: 150%;"><a name="_gm5sejt4p02f"></a><div align="center" class="MsoNormal" data-custom-class="title" style="text-align: left; line-height: 1.5;"><strong><span style="line-height: 22.5px; font-size: 26px;">TERMS OF USE</span></strong></div><div align="center" class="MsoNormal" style="line-height: 22.5px; text-align: left;"><a name="_7m5b3xg56u7y"></a></div><div align="center" class="MsoNormal" data-custom-class="subtitle" style="text-align: left; line-height: 22.5px;"><br></div><div align="center" class="MsoNormal" data-custom-class="subtitle" style="text-align: left; line-height: 1.5;"><span style="color: rgb(89, 89, 89); font-size: 14.6667px; text-align: justify;"><strong>Last updated <bdt class="block-container question question-in-editor" data-id="e2088df5-25ea-aec9-83d4-6284f5a7e043" data-type="question">December 17, 2020</bdt></strong></span></div></div></div><div align="center" class="MsoNormal" style="line-height: 17.25px; text-align: left;"><br></div><div align="center" class="MsoNormal" style="line-height: 17.25px; text-align: left;"><br></div><div align="center" class="MsoNormal" style="line-height: 17.25px; text-align: left;"><span style="font-size: 11pt; line-height: 16.8667px;"><br></span></div></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 115%;"><a name="_a7mwfgcrtsqn"></a><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">AGREEMENT TO TERMS</span></strong></div></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 1;"><br></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 150%;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;
    Arial;mso-fareast-font-family:Calibri;color:#595959;mso-themecolor:text1;
    mso-themetint:166;">These Terms of Use constitute a legally binding agreement made between you, whether personally or on behalf of an entity (“you”) and <bdt class="block-container question question-in-editor" data-id="4ab94aa9-19d1-61e0-711e-42c7d186232b" data-type="question">Indonesia Mining Marketplace</bdt><bdt class="block-component"></bdt>, doing business as <bdt class="question">indominingmarketplace.com</bdt><bdt class="statement-end-if-in-editor"></bdt> ("<bdt class="block-component"></bdt><bdt class="question"><strong>indominingmarketplace.com</strong></bdt><bdt class="else-block"></bdt>", “<strong>we</strong>”, “<strong>us</strong>”, or “<strong>our</strong>”), concerning your access to and use of the <bdt class="block-container question question-in-editor" data-id="92c3b320-1d8b-c74c-db68-d12810736807" data-type="question">indominingmarketplace.com</bdt> website as well as any other media form, media channel, mobile website or mobile application related, linked, or otherwise connected thereto (collectively, the “Site”). You agree that by accessing the Site, you have read, understood, and agreed to be bound by all of these Terms of Use. IF YOU DO NOT AGREE WITH ALL OF THESE TERMS OF USE, THEN YOU ARE EXPRESSLY PROHIBITED FROM USING THE SITE AND YOU MUST DISCONTINUE USE IMMEDIATELY.</span></div></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 1;"><br></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 150%;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;
    Arial;mso-fareast-font-family:Calibri;color:#595959;mso-themecolor:text1;
    mso-themetint:166;">Supplemental terms and conditions or documents that may be posted on the Site from time to time are hereby expressly incorporated herein by reference. We reserve the right, in our sole discretion, to make changes or modifications to these Terms of Use at any time and for any reason. We will alert you about any changes by updating the “Last updated” date of these Terms of Use, and you waive any right to receive specific notice of each such change. It is your responsibility to periodically review these Terms of Use to stay informed of updates. You will be subject to, and will be deemed to have been made aware of and to have accepted, the changes in any revised Terms of Use by your continued use of the Site after the date such revised Terms of Use are posted.</span></div></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 1;"><br></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 150%;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;
    Arial;mso-fareast-font-family:Calibri;color:#595959;mso-themecolor:text1;
    mso-themetint:166;">The information provided on the Site is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation or which would subject us to any registration requirement within such jurisdiction or country. Accordingly, those persons who choose to access the Site from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable.</span></div><div class="MsoNormal" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;
    Arial;mso-fareast-font-family:Calibri;color:#595959;mso-themecolor:text1;
    mso-themetint:166;"><span style="font-size:11.0pt;line-height:115%;
    Arial;mso-fareast-font-family:Calibri;color:#595959;mso-themecolor:text1;
    mso-themetint:166;"><bdt class="block-component"></bdt></span></bdt></span></span></div></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 1;"><br></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 150%;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="user_o18_option" data-type="statement"><span style="font-size: 15px;"></bdt><bdt class="block-container if" data-type="if" id="a2595956-7028-dbe5-123e-d3d3a93ed076"><bdt data-type="conditional-block"><bdt data-type="body"><span style="color: rgb(89, 89, 89); font-size: 14.6667px;">The Site is intended for users who are at least 13 years of age. All users who are minors in the jurisdiction in which they reside (generally under the age of 18) must have the permission of, and be directly supervised by, their parent or guardian to use the Site. If you are a minor, you must have your parent or guardian read and agree to these Terms of Use prior to you using the Site.</span></bdt></bdt></bdt><bdt class="block-component" data-record-question-key="user_o18_option" data-type="statement"></span></bdt></div></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 1.5;"><br></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 150%;"><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 1.5;"><a name="_4rd71iod99ud"></a><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">INTELLECTUAL PROPERTY RIGHTS</span></strong></div></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 1;"><br></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 150%;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;
    Arial;mso-fareast-font-family:Calibri;color:#595959;mso-themecolor:text1;
    mso-themetint:166;">Unless otherwise indicated, the Site is our proprietary
    property and all source code, databases, functionality, software, website
    designs, audio, video, text, photographs, and graphics on the Site
    (collectively, the “Content”) and the trademarks, service marks, and logos
    contained therein (the “Marks”) are owned or controlled by us or licensed to
    us, and are protected by copyright and trademark laws and various other
    intellectual property rights and unfair competition laws of the United States, international copyright laws, and international conventions. The Content and the Marks are provided on the
    Site “AS IS” for your information and personal use only. Except as expressly provided in these Terms
    of Use, no part of the Site and no Content or Marks may be copied, reproduced,
    aggregated, republished, uploaded, posted, publicly displayed, encoded,
    translated, transmitted, distributed, sold, licensed, or otherwise exploited
    for any commercial purpose whatsoever, without our express prior written
    permission.</span></div></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 1;"><br></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 150%;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;
    Arial;mso-fareast-font-family:Calibri;color:#595959;mso-themecolor:text1;
    mso-themetint:166;">Provided that you are eligible to use the Site, you are
    granted a limited license to access and use the Site and to download or print a
    copy of any portion of the Content to which you have properly gained access
    solely for your personal, non-commercial use. We reserve all rights not
    expressly granted to you in and to the Site, the Content and the Marks.</span></div></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 1.5;"><br></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 150%;"><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 1.5;"><a name="_vhkegautf00d"></a><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">USER REPRESENTATIONS</span></strong></div><div class="MsoNormal" style="line-height: 1;"><br></div></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 150%;"><div class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
    line-height:115%;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; text-align: left;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);">By using the Site, you represent and warrant that: </span><bdt class="block-container if" data-type="if" id="d2d82ca8-275f-3f86-8149-8a5ef8054af6"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="user_account_option" data-type="statement"></bdt><bdt data-type="body"><span style="color: rgb(89, 89, 89); font-size: 11pt;">(</span><span style="color: rgb(89, 89, 89); font-size: 14.6667px;">1</span><span style="color: rgb(89, 89, 89); font-size: 11pt;">) all registration information you submit will be true, accurate, current, and complete; (</span><span style="color: rgb(89, 89, 89); font-size: 14.6667px;">2</span><span style="color: rgb(89, 89, 89); font-size: 11pt;">) you will maintain the accuracy of such information and promptly update such registration information as necessary<bdt class="block-container if" data-type="if" id="d2d82ca8-275f-3f86-8149-8a5ef8054af6"><bdt data-type="conditional-block"><bdt data-type="body"><span style="color: rgb(89, 89, 89); font-size: 11pt;">;</span></bdt></bdt><bdt class="statement-end-if-in-editor" data-type="close"></bdt> </bdt><span style="color: rgb(89, 89, 89); font-size: 11pt;">(</span><span style="color: rgb(89, 89, 89); font-size: 14.6667px;">3</span><span style="color: rgb(89, 89, 89); font-size: 11pt;">) you have the legal capacity and you agree to comply with these Terms of Use;</span><bdt class="block-container if" data-type="if" id="8d4c883b-bc2c-f0b4-da3e-6d0ee51aca13"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="user_u13_option" data-type="statement"></bdt> <bdt data-type="body"><span style="color: rgb(89, 89, 89); font-size: 11pt;">(</span><span style="color: rgb(89, 89, 89); font-size: 14.6667px;">4</span><span style="color: rgb(89, 89, 89); font-size: 11pt;">) you are not under the age of 13;</span></bdt></bdt><bdt class="statement-end-if-in-editor" data-type="close"></bdt></bdt></span></bdt></bdt></bdt><span style="color: rgb(89, 89, 89); font-size: 11pt;"> (</span><span style="color: rgb(89, 89, 89); font-size: 14.6667px;">5</span><span style="color: rgb(89, 89, 89); font-size: 11pt;">) you are not a minor in the jurisdiction in which you reside<bdt class="block-container if" data-type="if" id="76948fab-ec9e-266a-bb91-948929c050c9"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="user_o18_option" data-type="statement"></bdt><bdt data-type="body">, or if a minor, you have received parental permission to use the Site</bdt></bdt><bdt class="statement-end-if-in-editor" data-type="close"></bdt></bdt>; (</span><span style="color: rgb(89, 89, 89); font-size: 14.6667px;">6</span><span style="color: rgb(89, 89, 89); font-size: 11pt;">) you will not access the Site through automated or non-human means, whether through a bot, script, or otherwise; (</span><span style="color: rgb(89, 89, 89); font-size: 14.6667px;">7</span><span style="color: rgb(89, 89, 89); font-size: 11pt;">) you will not use the Site for any illegal or unauthorized purpose; and (</span><span style="color: rgb(89, 89, 89); font-size: 14.6667px;">8</span><span style="color: rgb(89, 89, 89); font-size: 11pt;">) your use of the Site will not violate any applicable law or regulation.</span><span style="color: rgb(89, 89, 89); font-size: 14.6667px;"></span></div></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><br></div><div class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
    line-height:115%;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; text-align: left;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);">If you provide any information that is untrue, inaccurate, not current, or incomplete, we have the right to suspend or terminate your account and refuse any and all current or future use of the Site (or any portion thereof).</span></div></div></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 1.5;"><br></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 150%;"><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" style="line-height: 1;"><a name="_esuoutkhaf53"></a> <bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="user_account_option" data-type="statement"><span style="font-size: 15px;"></span></bdt><bdt data-type="body"><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 17.25px;"><strong><span style="line-height: 24.5333px; font-size: 19px;">USER REGISTRATION</span></strong></div></bdt></bdt></div><div class="MsoNormal" style="line-height: 1;"><br></div><div class="MsoNormal" style="line-height: 1;"><bdt data-type="conditional-block"><bdt data-type="body"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);">You may be required to register with the Site. You agree to keep your password confidential and will be responsible for all use of your account and password. We reserve the right to remove, reclaim, or change a username you select if we determine, in our sole discretion, that such username is inappropriate, obscene, or otherwise objectionable.</span></div></bdt></bdt></div></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 1.5;"><br></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 1.5;"><br></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 150%;"><div class="MsoNormal" style="line-height: 1.5;"><bdt class="statement-end-if-in-editor" data-type="close"><span style="font-size: 15px;"></span></bdt></div><div class="MsoNormal" style="line-height:115%;"><a name="_1voziltdxegg"></a><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 17.25px;"><strong><span style="line-height: 24.5333px; font-size: 19px;">PROHIBITED ACTIVITIES</span></strong></div></div><div class="MsoNormal" style="line-height: 1;"><br></div><div class="MsoNormal" style="line-height:115%;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);">You may not access or use the Site for any purpose other than that for which we make the Site available. The Site may not be used in connection with any commercial endeavors except those that are specifically endorsed or approved by us.</span></div></div><div class="MsoNormal" style="line-height: 1;"><br></div><div class="MsoNormal" style="line-height:115%;"><div class="MsoNormal" style="text-align: justify; line-height: 17.25px;"><div class="MsoNormal" style="line-height: 17.25px;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; text-align: left;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);">As a user of the Site, you agree not to:</span></div><div class="MsoNormal" style="line-height: 17.25px;"><span style="font-size: 15px; line-height: 16.8667px; color: rgb(89, 89, 89);"><div class="MsoNormal" style="color: rgb(10, 54, 90); font-size: 15px; line-height: 1; text-align: left;"><br></div></span></div></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: -29.4px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89);"><bdt class="block-component"></bdt></span></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt><span style="line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: -29.4px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89);"><span style="line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: -22.05pt; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89);"><bdt class="block-container forloop" data-type="forloop" id="19beb913-5a5e-2b51-51f9-8600a8eb26c3" style="display: inline;"><bdt data-type="conditional-block" style="display: inline;"><bdt data-type="body" style="display: inline;">1</bdt></bdt></bdt></span><span style="font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: -29.4px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89);">. Circumvent, disable, or otherwise interfere with security-related features of the Site, including features that prevent or restrict the use or copying of any Content or enforce limitations on the use of the Site and/or the Content contained therein.</span></span></span></span><bdt class="statement-end-if-in-editor"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></span></bdt></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></span></bdt></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></span></bdt></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></span></bdt></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt><span style="line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: -29.4px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89);"><span style="line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: -22.05pt; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89);"><bdt class="block-container forloop" data-type="forloop" id="19beb913-5a5e-2b51-51f9-8600a8eb26c3" style="display: inline;"><bdt data-type="conditional-block" style="display: inline;"><bdt data-type="body" style="display: inline;">2</bdt></bdt></bdt></span><span style="font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: -29.4px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89);">. Decipher, decompile, disassemble, or reverse engineer any of the software comprising or in any way making up a part of the Site.</span></span></span></span></span><bdt class="statement-end-if-in-editor"><span style="font-size: 15px;"></span></bdt></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt><span style="line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: -29.4px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89);"><span style="line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: -22.05pt; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89);"><bdt class="block-container forloop" data-type="forloop" id="19beb913-5a5e-2b51-51f9-8600a8eb26c3" style="display: inline;"><bdt data-type="conditional-block" style="display: inline;"><bdt data-type="body" style="display: inline;">3</bdt></bdt></bdt></span><span style="font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: -29.4px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89);">. Except as may be the result of standard search engine or Internet browser usage, use, launch, develop, or distribute any automated system, including without limitation, any spider, robot, cheat utility, scraper, or offline reader that accesses the Site, or using or launching any unauthorized script or other software.</span></span></span></span><bdt class="statement-end-if-in-editor"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt><span style="line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: -29.4px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89);"><span style="line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: -22.05pt; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89);"><bdt class="block-container forloop" data-type="forloop" id="19beb913-5a5e-2b51-51f9-8600a8eb26c3" style="display: inline;"><bdt data-type="conditional-block" style="display: inline;"><bdt data-type="body" style="display: inline;">4</bdt></bdt></bdt></span><span style="font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: -29.4px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89);">. Make any unauthorized use of the Site, including collecting usernames and/or email addresses of users by electronic or other means for the purpose of sending unsolicited email, or creating user accounts by automated means or under false pretenses.</span></span></span></span><bdt class="statement-end-if-in-editor"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 15px;"><bdt class="forloop-component"></bdt></span></div><div class="MsoNormal" style="text-align: left; line-height: 1.5;"><a name="_zbbv9tgty199"></a></div></div><div class="MsoNormal" style="text-align: justify; line-height: 1.5;"><br></div><div class="MsoNormal" style="text-align: justify; line-height: 1.5;"><br></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><bdt data-type="conditional-block"><bdt data-type="body"><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 17.25px; text-align: left;"><strong><span style="line-height: 24.5333px; font-size: 19px;">USER GENERATED CONTRIBUTIONS</span></strong> </div></bdt></bdt></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><br></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><bdt data-type="conditional-block"><bdt data-type="body"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; text-align: left;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><bdt class="block-component"></bdt>The Site may invite you to chat, contribute to, or participate in blogs, message boards, online forums, and other functionality, and may provide you with the opportunity to create, submit, post, display, transmit, perform, publish, distribute, or broadcast content and materials to us or on the Site, including but not limited to text, writings, video, audio, photographs, graphics, comments, suggestions, or personal information or other material (collectively, "Contributions"). Contributions may be viewable by other users of the Site and through third-party websites. As such, any Contributions you transmit may be treated as non-confidential and non-proprietary. When you create or make available any Contributions, you thereby represent and warrant that:<bdt class="else-block"></bdt></span></span></div></bdt></bdt></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><bdt data-type="conditional-block"><bdt data-type="body"><div class="MsoNormal" style="line-height: 1; text-align: left;"><br></div><div class="MsoNormal" style="text-align: justify; line-height: 17.25px;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; margin-left: 20px; text-align: left;"><span style="font-size: 14px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">1.  The creation, distribution, transmission, public display, or performance, and the accessing, downloading, or copying of your Contributions do not and will not infringe the proprietary rights, including but not limited to the copyright, patent, trademark, trade secret, or moral rights of any third party.<br>2.  You are the creator and owner of or have the necessary licenses, rights, consents, releases, and permissions to use and to authorize us, the Site, and other users of the Site to use your Contributions in any manner contemplated by the Site and these Terms of Use.<br>3.  You have the written consent, release, and/or permission of each and every identifiable individual person in your Contributions to use the name or likeness of each and every such identifiable individual person to enable inclusion and use of your Contributions in any manner contemplated by the Site and these Terms of Use.<br>4.  Your Contributions are not false, inaccurate, or misleading.<br>5.  Your Contributions are not unsolicited or unauthorized advertising, promotional materials, pyramid schemes, chain letters, spam, mass mailings, or other forms of solicitation.<br>6.  Your Contributions are not obscene, lewd, lascivious, filthy, violent, harassing, libelous, slanderous, or otherwise objectionable (as determined by us).<br>7.  Your Contributions do not ridicule, mock, disparage, intimidate, or abuse anyone.<br>8.  Your Contributions are not used to harass or threaten (in the legal sense of those terms) any other person and to promote violence against a specific person or class of people.<br>9.  Your Contributions do not violate any applicable law, regulation, or rule.<br>10.  Your Contributions do not violate the privacy or publicity rights of any third party.<br>11.  Your Contributions do not contain any material that solicits personal information from anyone under the age of 18 or exploits people under the age of 18 in a sexual or violent manner.<br>12.  Your Contributions do not violate any applicable law concerning child pornography, or otherwise intended to protect the health or well-being of minors.<br>13.  Your Contributions do not include any offensive comments that are connected to race, national origin, gender, sexual preference, or physical handicap.<br>14.  Your Contributions do not otherwise violate, or link to material that violates, any provision of these Terms of Use, or any applicable law or regulation.</span></span></div><div class="MsoNormal" style="line-height: 1; margin-left: 20px; text-align: left;"><br></div></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; text-align: left;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);">Any use of the Site in violation of the foregoing violates these Terms of Use and may result in, among other things, termination or suspension of your rights to use the Site.</span></div></bdt></bdt></div></div><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" style="line-height:115%;"><div class="MsoNormal" style="text-align: justify; line-height: 1;"><bdt data-type="conditional-block"><bdt data-type="body"><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 1.5; text-align: left;"><strong><span style="line-height: 24.5333px; font-size: 19px;">CONTRIBUTION LICENSE</span></strong></div></bdt></bdt><bdt data-type="conditional-block"><bdt data-type="body"><div class="MsoNormal" style="line-height: 17.25px; text-align: left;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><bdt class="block-component"></bdt></span></div></bdt></bdt></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><br></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><bdt data-type="conditional-block"><bdt data-type="body"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; text-align: left;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);">By posting your Contributions to any part of the Site<bdt class="block-container if" data-type="if" id="19652acc-9a2a-5ffe-6189-9474402fa6cc"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="socialnetwork_link_option" data-type="statement"></bdt><bdt data-type="body"> or making Contributions accessible to the Site by linking your account from the Site to any of your social networking accounts</bdt></bdt><bdt class="statement-end-if-in-editor" data-type="close"></bdt></bdt>, you automatically grant, and you represent and warrant that you have the right to grant, to us an unrestricted, unlimited, irrevocable, perpetual, non-exclusive, transferable, royalty-free, fully-paid, worldwide right, and license to host, use, copy, reproduce, disclose, sell, resell, publish, broadcast, retitle, archive, store, cache, publicly perform, publicly display, reformat, translate, transmit, excerpt (in whole or in part), and distribute such Contributions (including, without limitation, your image and voice) for any purpose, commercial, advertising, or otherwise, and to prepare derivative works of, or incorporate into other works, such Contributions, and grant and authorize sublicenses of the foregoing. The use and distribution may occur in any media formats and through any media channels.</span></div></bdt></bdt></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><br></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><bdt data-type="conditional-block"><bdt data-type="body"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; text-align: left;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);">This license will apply to any form, media, or technology now known or hereafter developed, and includes our use of your name, company name, and franchise name, as applicable, and any of the trademarks, service marks, trade names, logos, and personal and commercial images you provide. You waive all moral rights in your Contributions, and you warrant that moral rights have not otherwise been asserted in your Contributions.</span></div></bdt></bdt></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><br></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><bdt data-type="conditional-block"><bdt data-type="body"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; text-align: left;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);">We do not assert any ownership over your Contributions. You retain full ownership of all of your Contributions and any intellectual property rights or other proprietary rights associated with your Contributions. We are not liable for any statements or representations in your Contributions provided by you in any area on the Site. You are solely responsible for your Contributions to the Site and you expressly agree to exonerate us from any and all responsibility and to refrain from any legal action against us regarding your Contributions.  </span></div></bdt></bdt></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><br></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><bdt data-type="conditional-block"><bdt data-type="body"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5; text-align: left;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);">We have the right, in our sole and absolute discretion, (1) to edit, redact, or otherwise change any Contributions; (2) to re-categorize any Contributions to place them in more appropriate locations on the Site; and (3) to pre-screen or delete any Contributions at any time and for any reason, without notice. We have no obligation to monitor your Contributions.<bdt class="else-block"></bdt></span></span></div><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" style="line-height: 1;"><bdt class="block-container if" data-type="if" id="a378120a-96b1-6fa3-279f-63d5b96341d3"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="review_option" data-type="statement"><span style="font-size: 15px;"></span></bdt></bdt></div></div><div class="MsoNormal" style="line-height: 115%;"><span style="font-size: 15px;"><a name="_6nl7u6ag6use"></a></span></div><bdt class="block-container if" data-type="if" id="c954892f-02b9-c743-d1e8-faf0d59a4b70"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="mobile_app_option" data-type="statement"><span style="font-size: 15px;"></span></bdt></bdt></div><div align="center"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 115%;"><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">SOCIAL MEDIA</span></strong></div><div style="line-height: 1;"><br></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;font-family:Arial;
    Calibri;color:#595959;mso-themecolor:text1;mso-themetint:166;">As part of the functionality of the Site, you may link your account with online accounts you have with third-party service providers (each such account, a “Third-Party Account”) by either: (1) providing your Third-Party Account login information through the Site; or (2) allowing us to access your Third-Party Account, as is permitted under the applicable terms and conditions that govern your use of each Third-Party Account. You represent and warrant that you are entitled to disclose your Third-Party Account login information to us and/or grant us access to your Third-Party Account, without breach by you of any of the terms and conditions that govern your use of the applicable Third-Party Account, and without obligating us to pay any fees or making us subject to any usage limitations imposed by the third-party service provider of the Third-Party Account. By granting us access to any Third-Party Accounts, you understand that (1) we may access, make available, and store (if applicable) any content that you have provided to and stored in your Third-Party Account (the “Social Network Content”) so that it is available on and through the Site via your account, including without limitation any friend lists and (2) we may submit to and receive from your Third-Party Account additional information to the extent you are notified when you link your account with the Third-Party Account. Depending on the Third-Party Accounts you choose and subject to the privacy settings that you have set in such Third-Party Accounts, personally identifiable information that you post to your Third-Party Accounts may be available on and through your account on the Site. Please note that if a Third-Party Account or associated service becomes unavailable or our access to such Third Party Account is terminated by the third-party service provider, then Social Network Content may no longer be available on and through the Site. You will have the ability to disable the connection between your account on the Site and your Third-Party Accounts at any time. PLEASE NOTE THAT YOUR RELATIONSHIP WITH THE THIRD-PARTY SERVICE PROVIDERS ASSOCIATED WITH YOUR THIRD-PARTY ACCOUNTS IS GOVERNED SOLELY BY YOUR AGREEMENT(S) WITH SUCH THIRD-PARTY SERVICE PROVIDERS. We make no effort to review any Social Network Content for any purpose, including but not limited to, for accuracy, legality, or non-infringement, and we are not responsible for any Social Network Content. You acknowledge and agree that we may access your email address book associated with a Third-Party Account and your contacts list stored on your mobile device or tablet computer solely for purposes of identifying and informing you of those contacts who have also registered to use the Site. You can deactivate the connection between the Site and your Third-Party Account by contacting us using the contact information below or through your account settings (if applicable). We will attempt to delete any information stored on our servers that was obtained through such Third-Party Account, except the username and profile picture that become associated with your account.</span></div><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" style="line-height: 1.5;"><br></div><div align="center" style="line-height: 1.5;"><span style="font-size: 15px;"><bdt class="statement-end-if-in-editor"></bdt></span></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 115%;"><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">SUBMISSIONS</span></strong></div><div style="line-height: 1;"><br></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;font-family:Arial;
    Calibri;color:#595959;mso-themecolor:text1;mso-themetint:166;"><span style="font-size:11.0pt;line-height:115%;font-family:Arial;
    Calibri;color:#595959;mso-themecolor:text1;mso-themetint:166;">You acknowledge and agree that any questions, comments, suggestions, ideas, feedback, or other information regarding the Site ("Submissions") provided by you to us are non-confidential and shall become our sole property. We shall own exclusive rights, including all intellectual property rights, and shall be entitled to the unrestricted use and dissemination of these Submissions for any lawful purpose, commercial or otherwise, without acknowledgment or compensation to you. You hereby waive all moral rights to any such Submissions, and you hereby warrant that any such Submissions are original with you or that you have the right to submit such Submissions. You agree there shall be no recourse against us for any alleged or actual infringement or misappropriation of any proprietary right in your Submissions.</span></span></div><div class="MsoNormal" style="line-height: 1.5;"><br></div><div style="line-height: 1.5;"><br></div><div align="center"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 115%;"><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">THIRD-PARTY WEBSITE AND CONTENT</span></strong></div><div style="line-height: 1;"><br></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;font-family:Arial;
    Calibri;color:#595959;mso-themecolor:text1;mso-themetint:166;">The Site may contain (or you may be sent via the Site) links to other websites ("Third-Party Websites") as well as articles, photographs, text, graphics, pictures, designs, music, sound, video, information, applications, software, and other content or items belonging to or originating from third parties ("Third-Party Content"). Such Third-Party Websites and Third-Party Content are not investigated, monitored, or checked for accuracy, appropriateness, or completeness by us, and we are not responsible for any Third-Party Websites accessed through the Site or any Third-Party Content posted on, available through, or installed from the Site, including the content, accuracy, offensiveness, opinions, reliability, privacy practices, or other policies of or contained in the Third-Party Websites or the Third-Party Content. Inclusion of, linking to, or permitting the use or installation of any Third-Party Websites or any Third-Party Content does not imply approval or endorsement thereof by us. If you decide to leave the Site and access the Third-Party Websites or to use or install any Third-Party Content, you do so at your own risk, and you should be aware these Terms of Use no longer govern. You should review the applicable terms and policies, including privacy and data gathering practices, of any website to which you navigate from the Site or relating to any applications you use or install from the Site. Any purchases you make through Third-Party Websites will be through other websites and from other companies, and we take no responsibility whatsoever in relation to such purchases which are exclusively between you and the applicable third party. You agree and acknowledge that we do not endorse the products or services offered on Third-Party Websites and you shall hold us harmless from any harm caused by your purchase of such products or services. Additionally, you shall hold us harmless from any losses sustained by you or harm caused to you relating to or resulting in any way from any Third-Party Content or any contact with Third-Party Websites.</span></div><div class="MsoNormal" style="line-height: 1.5;"><br></div><div style="line-height: 1.5;"><br></div><div align="center"><span style="font-size: 15px;"><bdt class="statement-end-if-in-editor"></bdt></span></div><div align="center" style="text-align: left; line-height: 1;"><div class="MsoNormal" style="line-height: 115%;"><span style="font-size: 15px;"><a name="_29ce8o9pbtmi"></a></span></div><bdt class="block-container if" data-type="if" id="14038561-dad7-be9d-370f-f8aa487b2570"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="advertiser_option" data-type="statement"><span style="font-size: 15px;"></span></bdt></bdt><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 115%;"><a name="_wj13r09u8u3u"></a><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">SITE MANAGEMENT</span></strong></div></div><div align="center" style="text-align: left; line-height: 1;"><br></div><div align="center" style="text-align: left; line-height: 1.5;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;font-family:Arial;
    Calibri;color:#595959;mso-themecolor:text1;mso-themetint:166;">We reserve the
    right, but not the obligation, to: (1) monitor the Site for violations of
    these Terms of Use; (2) take appropriate legal action against anyone who, in
    our sole discretion, violates the law or these Terms of Use, including without
    limitation, reporting such user to law enforcement authorities; (3) in our sole
    discretion and without limitation, refuse, restrict access to, limit the
    availability of, or disable (to the extent technologically feasible) any of
    your Contributions or any portion thereof; (4) in our sole discretion and
    without limitation, notice, or liability, to remove from the Site or otherwise
    disable all files and content that are excessive in size or are in any way
    burdensome to our systems; and (5) otherwise manage the Site in a manner
    designed to protect our rights and property and to facilitate the proper
    functioning of the Site.</span></div></div><div align="center" style="text-align: left; line-height: 1.5;"><br></div><div align="center" style="text-align: left; line-height: 1.5;"><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" style="line-height: 1.5;"><a name="_jugvcvcw0oj9"></a></div><bdt class="block-container if" data-type="if" id="bdd90fa9-e664-7d0b-c352-2b8e77dd3bb4"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="privacy_policy_option" data-type="statement"><span style="font-size: 15px;"></span></bdt></bdt><div style="text-align: justify; line-height: 1.5;"><bdt class="block-container if" data-type="if" id="87a7471d-cf82-1032-fdf8-601d37d7b017"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="privacy_policy_followup" data-type="statement" style="font-size: 14.6667px;"><span style="font-size: 15px;"></span></bdt> <bdt data-type="body"><div class="MsoNormal" data-custom-class="heading_1" style="text-align: left; line-height: 1.5;"><strong><span style="line-height: 24.5333px; color: black; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 19px;">PRIVACY POLICY</span></strong></div><div class="MsoNormal" style="font-size: 14.6667px; text-align: left; line-height: 1;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><br></span></div><div class="MsoNormal" data-custom-class="body_text" style="font-size: 14.6667px; text-align: left; line-height: 1.5;"><span style="font-size: 15px; line-height: 16.8667px; color: rgb(89, 89, 89);">We care about data privacy and security. </span><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);">By using the Site, you agree to be bound by our Privacy Policy posted on the Site, which is incorporated into these Terms of Use. Please be advised the Site is hosted in <span style="color: rgb(89, 89, 89); font-size: 11pt;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><bdt class="block-component"></bdt><bdt class="question">__________</bdt><bdt class="statement-end-if-in-editor"></bdt></span></span>. If you access the Site from any other region of the world with laws or other requirements governing personal data collection, use, or disclosure that differ from applicable laws in <span style="color: rgb(89, 89, 89); font-size: 11pt;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><bdt class="block-component"></bdt><bdt class="question">__________</bdt><bdt class="statement-end-if-in-editor"></bdt></span></span>, then through your continued use of the Site, you are transferring your data to <span style="color: rgb(89, 89, 89); font-size: 11pt;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><bdt class="block-component"></bdt><bdt class="question">__________</bdt><bdt class="statement-end-if-in-editor"></bdt></span></span>, and you agree to have your data transferred to and processed in <span style="color: rgb(89, 89, 89); font-size: 11pt;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><bdt class="block-component"></bdt><bdt class="question">__________</bdt><bdt class="statement-end-if-in-editor"></bdt></span></span>. <bdt class="block-component"></span></bdt></bdt></bdt></bdt></span></bdt></div></bdt></bdt></bdt></div><div style="text-align: justify; line-height: 1.5;"><br></div><div style="text-align: justify; line-height: 1.5;"><br></div><div style="line-height: 1.5;"><bdt class="block-container if" data-type="if"><bdt class="statement-end-if-in-editor" data-type="close" style="font-size: 14.6667px;"><span style="font-size: 15px;"></span></bdt></bdt></div><div class="MsoNormal" style="line-height: 115%;"><span style="font-size: 15px;"><a name="_n081pott8yce"></a></span></div><bdt class="block-component"><bdt class="block-component"></span></bdt></bdt></span></bdt></bdt><div class="MsoNormal" style="line-height: 1;"><span style="font-size: 15px;"><a name="_sg28ikxq3swh"></a></span><bdt class="block-component"><bdt class="block-component"></bdt><bdt class="block-component"></bdt></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 115%;"><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">COPYRIGHT INFRINGEMENTS</span></strong></div><div align="center" style="text-align: left; line-height: 1;"><br></div><div align="center" data-custom-class="body_text" style="text-align: left; line-height: 1.5;"><span style="font-size: 15px;">We respect the intellectual property rights of others. If you believe that any material available on or through the Site infringes upon any copyright you own or control, please immediately notify us using the contact information provided below (a “Notification”). A copy of your Notification will be sent to the person who posted or stored the material addressed in the Notification. Please be advised that pursuant to applicable law you may be held liable for damages if you make material misrepresentations in a Notification. Thus, if you are not sure that material located on or linked to by the Site infringes your copyright, you should consider first contacting an attorney.</span></div><div align="center" style="text-align: left; line-height: 1.5;"><br></div><div align="center" style="text-align: left; line-height: 1.5;"><br></div><div align="center" style="text-align: left; line-height: 1.5;"><bdt class="statement-end-if-in-editor"></bdt><bdt class="statement-end-if-in-editor"></bdt></div><div align="center" style="text-align: left;"><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 115%;"><a name="_k3mndam4w6w1"></a><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">TERM AND
    TERMINATION</span></strong></div></div><div align="center" style="text-align: left; line-height: 1;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);">These Terms of Use shall remain in full force and effect while you use the Site. WITHOUT LIMITING ANY OTHER PROVISION OF THESE TERMS OF USE, WE RESERVE THE RIGHT TO, IN OUR SOLE DISCRETION AND WITHOUT NOTICE OR LIABILITY, DENY ACCESS TO AND USE OF THE SITE (INCLUDING BLOCKING CERTAIN IP ADDRESSES), TO ANY PERSON FOR ANY REASON OR FOR NO REASON, INCLUDING WITHOUT LIMITATION FOR BREACH OF ANY REPRESENTATION, WARRANTY, OR COVENANT CONTAINED IN THESE TERMS OF USE OR OF ANY APPLICABLE LAW OR REGULATION. WE MAY TERMINATE YOUR USE OR PARTICIPATION IN THE SITE OR DELETE <bdt class="block-container if" data-type="if" id="a6e121c2-36b4-5066-bf9f-a0a33512e768"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="user_account_option" data-type="statement"></bdt><bdt data-type="body">YOUR ACCOUNT AND </bdt></bdt><bdt class="statement-end-if-in-editor" data-type="close"></bdt></bdt>ANY CONTENT OR INFORMATION THAT YOU POSTED AT ANY TIME,
    WITHOUT WARNING, IN OUR SOLE DISCRETION.</span></div></div><div align="center" style="text-align: left; line-height: 1;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;font-family:Arial;
    Calibri;color:#595959;mso-themecolor:text1;mso-themetint:166;">If we terminate
    or suspend your account for any reason, you are prohibited from registering and
    creating a new account under your name, a fake or borrowed name, or the name of
    any third party, even if you may be acting on behalf of the third party. In
    addition to terminating or suspending your account, we reserve the right to
    take appropriate legal action, including without limitation pursuing civil,
    criminal, and injunctive redress.</span></div></div><div align="center" style="text-align: left; line-height: 1.5;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 1.5;"><a name="_e2dep1hfgltt"></a><strong><span style="line-height: 115%; font-family: Arial;"><span style="font-size: 19px;">MODIFICATIONS AND INTERRUPTIONS</span></span></strong></div></div><div align="center" style="text-align: left; line-height: 1;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;font-family:Arial;
    Calibri;color:#595959;mso-themecolor:text1;mso-themetint:166;">We reserve the right to change, modify, or remove the contents of the Site at any time or for any reason at our sole discretion without notice. However, we have no obligation to update any information on our Site. We also reserve the right to modify or discontinue all or part of the Site without notice at any time. We will not be liable to you or any third party for any modification, price change, suspension, or discontinuance of the Site.  </span></div></div><div align="center" style="text-align: left; line-height: 1;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;font-family:Arial;
    Calibri;color:#595959;mso-themecolor:text1;mso-themetint:166;">We cannot guarantee
    the Site will be available at all times. We may experience hardware, software,
    or other problems or need to perform maintenance related to the Site, resulting
    in interruptions, delays, or errors. We
    reserve the right to change, revise, update, suspend, discontinue, or otherwise
    modify the Site at any time or for any reason without notice to you. You agree that we have no liability
    whatsoever for any loss, damage, or inconvenience caused by your inability to
    access or use the Site during any downtime or discontinuance of the Site. Nothing in these Terms of Use will be
    construed to obligate us to maintain and support the Site or to supply any
    corrections, updates, or releases in connection therewith.</span></div></div><div align="center" style="text-align: left; line-height: 1.5;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 1.5;"><a name="_p6vbf8atcwhs"></a><strong><span style="line-height: 115%; font-family: Arial;"><span style="font-size: 19px;">GOVERNING LAW</span></span></strong></div><div class="MsoNormal" style="line-height: 1;"><br></div><div class="MsoNormal" style="line-height: 115%;"><bdt class="block-component"><span style="font-size: 15px;"></bdt></span></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);">These Terms shall be governed by and defined following the laws of <span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><bdt class="block-component"></bdt><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><bdt class="question">Indonesia</bdt></span></span><bdt class="statement-end-if-in-editor"></bdt></span></span></span></span></span></span></span></span>. <bdt class="question">Indonesia Mining Marketplace</bdt> and yourself irrevocably consent that the courts of <span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><bdt class="block-component"></bdt><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><bdt class="question">Indonesia</bdt></span></span><bdt class="statement-end-if-in-editor"></bdt></span> </span></span></span></span></span>shall have exclusive jurisdiction to resolve any dispute which may arise in connection with these terms.<span style="font-size: 15px;"><bdt class="statement-end-if-in-editor"></bdt></span></span></span></div><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 1.5;"><a name="_v5i5tjw62cyw"></a><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">DISPUTE RESOLUTION</span></strong></div></div><div align="center" style="text-align: left; line-height: 1;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" style="line-height: 115%;"><bdt class="block-container if" data-type="if" id="4de367b8-a92e-8bf8-bc2e-013cba6337f8"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="dispute_option" data-type="statement"></span></bdt> <bdt data-type="body"><div class="MsoNormal" data-custom-class="heading_2" style="line-height: 17.25px; text-align: left;"><strong>Binding Arbitration</strong></div></bdt></bdt></bdt></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><br></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><bdt class="block-container if" data-type="if"><bdt data-type="conditional-block"><bdt data-type="body"><div class="MsoNormal" style="text-align: left; line-height: 17.25px;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><bdt class="block-component"></bdt></span></span></div><div class="MsoNormal" data-custom-class="body_text" style="text-align: left; line-height: 1.5;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);">Any dispute <span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);">arising out of or in connection with this contract, including any question regarding its existence, validity or termination, shall be referred to and finally resolved by the International Commercial Arbitration Court under the European Arbitration Chamber (Belgium, Brussels, Avenue Louise, 146) according to the Rules of this ICAC, which, as a result of referring to it, is considered as the part of this clause. The number of arbitrators shall be <bdt class="question">__________</bdt>. <span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);">The seat, or legal place, of arbitration shall be <span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><bdt class="block-component"></bdt><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><bdt class="block-component"></bdt><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><bdt class="block-component"></bdt><bdt class="question">__________</bdt><bdt class="statement-end-if-in-editor"></bdt></span></span></span></span></span></span></span><bdt class="statement-end-if-in-editor"></bdt></span></span></span><bdt class="statement-end-if-in-editor"></bdt></span>.<span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"> The language of the proceedings shall be <bdt class="question">__________</bdt>.</span></span> The governing law of the contract shall be the substantive law of <span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><bdt class="block-component"></bdt><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);"><bdt class="block-component"></bdt><bdt class="question">__________</bdt><bdt class="statement-end-if-in-editor"></bdt></span></span></span></span></span></span></span><bdt class="statement-end-if-in-editor"></bdt></span></span>.<bdt class="statement-end-if-in-editor"></bdt></span></span></span></div></div></bdt></bdt></bdt></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><br></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><bdt class="block-container if" data-type="if"><bdt data-type="conditional-block"><bdt data-type="body"><div class="MsoNormal" data-custom-class="heading_2" style="line-height: 17.25px; text-align: left;"><a name="_inlv5c77dhih"></a><strong>Restrictions</strong></div></bdt></bdt></bdt></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><br></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><bdt class="block-container if" data-type="if"><bdt data-type="conditional-block"><bdt data-type="body"><div class="MsoNormal" data-custom-class="body_text" style="text-align: left; line-height: 1.5;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);">The Parties agree that any arbitration shall be limited to the Dispute between the Parties individually. To the full extent permitted by law, (a) no arbitration shall be joined with any other proceeding; (b) there is no right or authority for any Dispute to be arbitrated on a class-action basis or to utilize class action procedures; and (c) there is no right or authority for any Dispute to be brought in a purported representative capacity on behalf of the general public or any other persons.</span></div></bdt></bdt></bdt></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><br></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><bdt class="block-container if" data-type="if"><bdt data-type="conditional-block"><bdt data-type="body"><div class="MsoNormal" data-custom-class="heading_2" style="line-height: 17.25px; text-align: left;"><a name="_mdjlt1af25uq"></a><strong>Exceptions to Arbitration</strong></div></bdt></bdt></bdt></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><br></div><div class="MsoNormal" style="text-align: justify; line-height: 1;"><bdt class="block-container if" data-type="if"><bdt data-type="conditional-block"><bdt data-type="body"><div class="MsoNormal" data-custom-class="body_text" style="text-align: left; line-height: 1.5;"><span style="font-size: 11pt; line-height: 16.8667px; color: rgb(89, 89, 89);">The Parties agree that the following Disputes are not subject to the above provisions concerning binding arbitration: (a) any Disputes seeking to enforce or protect, or concerning the validity of, any of the intellectual property rights of a Party; (b) any Dispute related to, or arising from, allegations of theft, piracy, invasion of privacy, or unauthorized use; and (c) any claim for injunctive relief. If this provision is found to be illegal or unenforceable, then neither Party will elect to arbitrate any Dispute falling within that portion of this provision found to be illegal or unenforceable and such Dispute shall be decided by a court of competent jurisdiction within the courts listed for jurisdiction above, and the Parties agree to submit to the personal jurisdiction of that court.</span></div></bdt></bdt><bdt class="statement-end-if-in-editor" data-type="close"><span style="font-size: 15px;"></span></bdt></bdt></div></div><div align="center" style="text-align: left; line-height: 1.5;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 1.5;"><a name="_mjgzo07ttzx5"></a><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">CORRECTIONS</span></strong></div></div><div align="center" style="text-align: left; line-height: 1;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;font-family:Arial;
    Calibri;color:#595959;mso-themecolor:text1;mso-themetint:166;">There may be
    information on the Site that contains typographical errors, inaccuracies, or
    omissions, including descriptions, pricing, availability, and various other
    information. We reserve the right to
    correct any errors, inaccuracies, or omissions and to change or update the
    information on the Site at any time, without prior notice.</span></div></div><div align="center" style="text-align: left; line-height: 1.5;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 1.5;"><a name="_gvi74blrahf9"></a><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">DISCLAIMER</span></strong></div></div><div align="center" style="text-align: left; line-height: 1;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;font-family:Arial;
    Calibri;color:#595959;mso-themecolor:text1;mso-themetint:166;">THE SITE IS PROVIDED
    ON AN AS-IS AND AS-AVAILABLE BASIS. YOU
    AGREE THAT YOUR USE OF THE SITE AND OUR SERVICES WILL BE AT YOUR SOLE RISK. TO THE
    FULLEST EXTENT PERMITTED BY LAW, WE DISCLAIM ALL WARRANTIES, EXPRESS OR
    IMPLIED, IN CONNECTION WITH THE SITE AND YOUR USE THEREOF, INCLUDING, WITHOUT
    LIMITATION, THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
    PURPOSE, AND NON-INFRINGEMENT. WE MAKE NO WARRANTIES OR REPRESENTATIONS ABOUT
    THE ACCURACY OR COMPLETENESS OF THE SITE’S CONTENT OR THE CONTENT OF ANY
    WEBSITES LINKED TO THE SITE AND WE WILL ASSUME NO LIABILITY OR RESPONSIBILITY
    FOR ANY (1) ERRORS, MISTAKES, OR INACCURACIES OF CONTENT AND MATERIALS, (2)
    PERSONAL INJURY OR PROPERTY DAMAGE, OF ANY NATURE WHATSOEVER, RESULTING FROM
    YOUR ACCESS TO AND USE OF THE SITE, (3) ANY UNAUTHORIZED ACCESS TO OR USE OF
    OUR SECURE SERVERS AND/OR ANY AND ALL PERSONAL INFORMATION AND/OR FINANCIAL
    INFORMATION STORED THEREIN, (4) ANY INTERRUPTION OR CESSATION OF TRANSMISSION
    TO OR FROM THE SITE, (5) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE WHICH
    MAY BE TRANSMITTED TO OR THROUGH THE SITE BY ANY THIRD PARTY, AND/OR (6) ANY
    ERRORS OR OMISSIONS IN ANY CONTENT AND MATERIALS OR FOR ANY LOSS OR DAMAGE OF
    ANY KIND INCURRED AS A RESULT OF THE USE OF ANY CONTENT POSTED, TRANSMITTED, OR
    OTHERWISE MADE AVAILABLE VIA THE SITE. WE DO NOT WARRANT, ENDORSE, GUARANTEE,
    OR ASSUME RESPONSIBILITY FOR ANY PRODUCT OR SERVICE ADVERTISED OR OFFERED BY A
    THIRD PARTY THROUGH THE SITE, ANY HYPERLINKED WEBSITE, OR ANY WEBSITE OR MOBILE
    APPLICATION FEATURED IN ANY BANNER OR OTHER ADVERTISING, AND WE WILL NOT BE A
    PARTY TO OR IN ANY WAY BE RESPONSIBLE FOR MONITORING ANY TRANSACTION BETWEEN YOU
    AND ANY THIRD-PARTY PROVIDERS OF PRODUCTS OR SERVICES. AS WITH THE
    PURCHASE OF A PRODUCT OR SERVICE THROUGH ANY MEDIUM OR IN ANY ENVIRONMENT, YOU
    SHOULD USE YOUR BEST JUDGMENT AND EXERCISE CAUTION WHERE APPROPRIATE.</span></div></div><div align="center" style="text-align: left; line-height: 1.5;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 1.5;"><a name="_4pjah3d0455q"></a><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">LIMITATIONS OF LIABILITY</span></strong></div></div><div align="center" style="text-align: left; line-height: 1;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;font-family:Arial;
    Calibri;color:#595959;mso-themecolor:text1;mso-themetint:166;">IN NO EVENT WILL WE OR OUR DIRECTORS, EMPLOYEES, OR AGENTS BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY DIRECT, INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, SPECIAL, OR PUNITIVE DAMAGES, INCLUDING LOST PROFIT, LOST REVENUE, LOSS OF DATA, OR OTHER DAMAGES ARISING FROM YOUR USE OF THE SITE, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. <bdt class="block-container if" data-type="if" id="3c3071ce-c603-4812-b8ca-ac40b91b9943"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="limitations_liability_option" data-type="statement"></bdt><bdt data-type="body">NOTWITHSTANDING ANYTHING TO THE CONTRARY CONTAINED HEREIN, OUR LIABILITY TO YOU FOR ANY CAUSE WHATSOEVER AND REGARDLESS OF THE FORM OF THE ACTION, WILL AT ALL TIMES BE LIMITED TO <bdt class="block-container if" data-type="if" id="73189d93-ed3a-d597-3efc-15956fa8e04e"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="limitations_liability_option" data-type="statement"></bdt><bdt data-type="body">THE
    AMOUNT PAID, IF ANY, BY YOU TO US<bdt class="block-container if" data-type="if" id="19e172cb-4ccf-1904-7c06-4251800ba748"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="limilation_liability_time_option" data-type="statement"></bdt></bdt></bdt></bdt><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="limitations_liability_option" data-type="statement"></bdt></bdt>. CERTAIN US STATE LAWS AND INTERNATIONAL LAWS DO NOT ALLOW LIMITATIONS ON IMPLIED WARRANTIES OR THE EXCLUSION OR LIMITATION OF CERTAIN DAMAGES. IF THESE LAWS APPLY TO YOU, SOME OR ALL OF THE ABOVE DISCLAIMERS OR LIMITATIONS MAY NOT APPLY TO YOU, AND YOU MAY HAVE ADDITIONAL RIGHTS.</bdt></bdt><bdt class="statement-end-if-in-editor" data-type="close"></bdt></bdt></span></div></div><div align="center" style="text-align: left; line-height: 1.5;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 1.5;"><a name="_k5ap68aj1dd4"></a><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">INDEMNIFICATION</span></strong></div></div><div align="center" style="text-align: left; line-height: 1;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;font-family:Arial;
    Calibri;color:#595959;mso-themecolor:text1;mso-themetint:166;">You agree to
    defend, indemnify, and hold us harmless, including our subsidiaries,
    affiliates, and all of our respective officers, agents, partners, and
    employees, from and against any loss, damage, liability, claim, or demand, including
    reasonable attorneys’ fees and expenses, made by any third party due to or
    arising out of: <bdt class="block-container if" data-type="if" id="475fffa5-05ca-def8-ac88-f426b238903c"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="user_post_content_option" data-type="statement"></bdt><bdt data-type="body">(1) your Contributions; </bdt></bdt><bdt class="statement-end-if-in-editor" data-type="close"></bdt></bdt>(<span style="font-size: 14.6667px;">2</span>) use of the Site; (<span style="font-size: 14.6667px;">3</span>) breach of these Terms of Use; (<span style="font-size: 14.6667px;">4</span>) any breach of your representations and warranties set forth in these Terms of Use; (<span style="font-size: 14.6667px;">5</span>) your violation of the rights of a third party, including but not limited to intellectual property rights; or (<span style="font-size: 14.6667px;">6</span>) any overt harmful act toward any other user of the Site with whom you connected via the Site. Notwithstanding the foregoing, we reserve the right, at your expense, to assume the exclusive defense and control of any matter for which you are required to indemnify us, and you agree to cooperate, at your expense, with our defense of such claims. We will use reasonable efforts to notify you of any such claim, action, or proceeding which is subject to this indemnification upon becoming aware of it.</span><span style="color: rgb(89, 89, 89); font-size: 14.6667px;"></span></div></div><div align="center" style="text-align: left; line-height: 1.5;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 1.5;"><a name="_ftgg17oha0ep"></a><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">USER DATA</span></strong></div></div><div align="center" style="text-align: left; line-height: 1;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;font-family:Arial;
    Calibri;color:#595959;mso-themecolor:text1;mso-themetint:166;">We will maintain
    certain data that you transmit to the Site for the purpose of managing the
    performance of the Site, as well as data relating to your use of the Site. Although we perform regular routine backups
    of data, you are solely responsible for all data that you transmit or that
    relates to any activity you have undertaken using the Site. You agree
    that we shall have no liability to you for any loss or corruption of any such
    data, and you hereby waive any right of action against us arising from any such
    loss or corruption of such data.</span></div></div><div align="center" style="text-align: left; line-height: 1.5;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 1.5;"><a name="_dkovrslqodui"></a><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">ELECTRONIC COMMUNICATIONS, TRANSACTIONS, AND SIGNATURES</span></strong></div></div><div align="center" style="text-align: left; line-height: 1;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;font-family:Arial;
    Calibri;color:#595959;mso-themecolor:text1;mso-themetint:166;">Visiting the Site, sending us emails, and completing online forms constitute electronic communications. You consent to receive electronic communications, and you agree that all agreements, notices, disclosures, and other communications we provide to you electronically, via email and on the Site, satisfy any legal requirement that such communication be in writing. YOU HEREBY AGREE TO THE USE OF ELECTRONIC SIGNATURES, CONTRACTS, ORDERS, AND OTHER RECORDS, AND TO ELECTRONIC DELIVERY OF NOTICES, POLICIES, AND RECORDS OF TRANSACTIONS INITIATED OR COMPLETED BY US OR VIA THE SITE. You hereby waive any rights or requirements under any statutes, regulations, rules, ordinances, or other laws in any jurisdiction which require an original signature or delivery or retention of non-electronic records, or to payments or the granting of credits by any means other than electronic means. </span></div><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;font-family:Arial;
    Calibri;color:#595959;mso-themecolor:text1;mso-themetint:166;"><bdt class="block-component"></bdt></span></span></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 115%;"><a name="_d4jvmcnxg0wt"></a><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">MISCELLANEOUS</span></strong></div></div><div align="center" style="text-align: left; line-height: 1;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;font-family:Arial;
    Calibri;color:#595959;mso-themecolor:text1;mso-themetint:166;">These Terms of Use and any policies or operating rules posted by us on the Site or in respect to the Site constitute the entire agreement and understanding between you and us. Our failure to exercise or enforce any right or provision of these Terms of Use shall not operate as a waiver of such right or provision. These Terms of Use operate to the fullest extent permissible by law. We may assign any or all of our rights and obligations to others at any time. We shall not be responsible or liable for any loss, damage, delay, or failure to act caused by any cause beyond our reasonable control. If any provision or part of a provision of these Terms of Use is determined to be unlawful, void, or unenforceable, that provision or part of the provision is deemed severable from these Terms of Use and does not affect the validity and enforceability of any remaining provisions. There is no joint venture, partnership, employment or agency relationship created between you and us as a result of these Terms of Use or use of the Site. You agree that these Terms of Use will not be construed against us by virtue of having drafted them. You hereby waive any and all defenses you may have based on the electronic form of these Terms of Use and the lack of signing by the parties hereto to execute these Terms of Use.<bdt class="block-component"></bdt></span></div></div><div align="center" style="text-align: left; line-height: 1.5;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 1.5;"><a name="_t4pq5cwn486q"></a><strong><span style="line-height: 115%; font-family: Arial;"><span style="font-size: 19px;">CONTACT US</span> </span></strong></div></div><div align="center" style="text-align: left; line-height: 1;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size:11.0pt;line-height:115%;font-family:Arial;
    Calibri;color:#595959;mso-themecolor:text1;mso-themetint:166;">In order to resolve a complaint regarding the Site or to receive further information regarding use of the Site, please contact us at: </span></div></div><div align="center" style="text-align: left; line-height: 1;"><br></div><div align="center" style="text-align: left;"><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);"><bdt class="block-container question question-in-editor" data-id="8a6919c4-2010-e7d6-2305-d74dfb08909d" data-type="question"><strong>Indonesia Mining Marketplace</strong></bdt></span><span style="color: rgb(89, 89, 89);"><strong><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></strong></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="color: rgb(89, 89, 89);"><strong><span style="font-size: 15px;"><bdt class="question">jl. kejaksaan 1 no. 2 rt4 rw5</bdt><bdt class="statement-end-if-in-editor"></bdt><bdt class="block-component"></bdt></span></strong></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="color: rgb(89, 89, 89);"><strong><span style="font-size: 15px;"><bdt class="question">Malang</bdt><bdt class="block-component"></bdt>, <bdt class="question">Jawa Timur</bdt></span></strong><strong><span style="font-size: 15px;"><bdt class="statement-end-if-in-editor"></bdt></span></strong><strong><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></strong></span> <span style="color: rgb(89, 89, 89);"><strong><span style="font-size: 15px;"><bdt class="question">65141</bdt><bdt class="statement-end-if-in-editor"></bdt> <bdt class="block-component"></bdt><bdt class="block-component"></bdt></span></strong></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="color: rgb(89, 89, 89);"><strong><span style="font-size: 15px;"><bdt class="block-component"></bdt><bdt class="question">Indonesia</bdt><bdt class="statement-end-if-in-editor"></bdt><bdt class="statement-end-if-in-editor"></bdt><bdt class="statement-end-if-in-editor"></bdt></span></strong></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="color: rgb(89, 89, 89);"><strong><span style="font-size: 15px;">Phone: </span></strong><strong><span style="font-size: 15px;"><span style="line-height: 115%; font-family: Arial;"><bdt class="block-container question question-in-editor" data-id="dd6f266f-438b-bfdc-9204-0b17e109e270" data-type="question">__________</bdt></span></span></strong></span><span style="font-size: 15px;"><strong><span style="color: rgb(89, 89, 89);"><bdt class="block-component"></bdt></span></strong></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);"><bdt class="block-container question question-in-editor" data-id="fdc2b5b8-c95f-244b-23a7-287f82541348" data-type="question"><strong>__________</strong></bdt></span></div><br></div><style>
          ul {
            list-style-type: square;
          }
          ul > li > ul {
            list-style-type: circle;
          }
          ul > li > ul > li > ul {
            list-style-type: square;
          }
          ol li {
            font-family: Arial ;
          }
        </style>
          </div>
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    @endsection

    @section('jsplus')
    <script>
      function ajaxCall() {
    this.send = function(data, url, method, success, type) {
        type = type||'json';
        var successRes = function(data) {
            success(data);
        }

        var errorRes = function(e) {
            console.log(e);
        }
        jQuery.ajax({
            url: url,
            type: method,
            data: data,
            success: successRes,
            error: errorRes,
            dataType: type,
            timeout: 60000
        });

    }

}

function locationInfo() {
    var rootUrl = "https://geodata.solutions/api/api.php";
    //now check for set values
    var addParams = '';
    if(jQuery("#gds_appid").length > 0) {
        addParams += '&appid=' + jQuery("#gds_appid").val();
    }
    if(jQuery("#gds_hash").length > 0) {
        addParams += '&hash=' + jQuery("#gds_hash").val();
    }

    var call = new ajaxCall();

    this.confCity = function(id) {
        var url = rootUrl+'?type=confCity&countryId='+ jQuery('#countryId option:selected').attr('countryid') +'&stateId=' + jQuery('#stateId option:selected').attr('stateid') + '&cityId=' + id;
        var method = "post";
        var data = {};
        call.send(data, url, method, function(data) {
        });
    };


    this.getCities = function(id) {
        jQuery(".cities option:gt(0)").remove();
        var stateClasses = jQuery('#cityId').attr('class');

        var cC = stateClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }
        var url = rootUrl+'?type=getCities&countryId='+ jQuery('#countryId option:selected').attr('countryid') +'&stateId=' + id + addParams + addClasses;
        var method = "post";
        var data = {};
        jQuery('.cities').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.cities').find("option:eq(0)").html("Select City");
            if(data.tp == 1){
                var listlen = Object.keys(data['result']).length;

                if(listlen > 0)
                {
                    jQuery.each(data['result'], function(key, val) {

                        var option = jQuery('<option />');
                        option.attr('value', val).text(val);
                        jQuery('.cities').append(option);
                    });
                    $('#cityId').selectpicker('refresh');
                }
                else
                {
                    var usestate = jQuery('#stateId option:selected').val();
                    var option = jQuery('<option />');
                    option.attr('value', usestate).text(usestate);
                    option.attr('selected', 'selected');
                    jQuery('.cities').append(option);
                }

                jQuery(".cities").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };

    this.getStates = function(id) {
        jQuery(".states option:gt(0)").remove();
        jQuery(".cities option:gt(0)").remove();
        //get additional fields
        var stateClasses = jQuery('#stateId').attr('class');

        var cC = stateClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }
        var url = rootUrl+'?type=getStates&countryId=' + id + addParams  + addClasses;
        var method = "post";
        var data = {};
        jQuery('.states').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.states').find("option:eq(0)").html("Select State");
            if(data.tp == 1){
                jQuery.each(data['result'], function(key, val) {
                    var option = jQuery('<option />');
                    option.attr('value', val).text(val);
                    option.attr('stateid', key);
                    jQuery('.states').append(option);
                });
                $('#stateId').selectpicker('refresh');
                jQuery(".states").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };

    this.getCountries = function() {
        //get additional fields
        var countryClasses = jQuery('#countryId').attr('class');

        var cC = countryClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }

        var presel = false;
        var iip = 'N';
        jQuery.each(cC, function( index, value ) {
            if (value.match("^presel-")) {
                presel = value.substring(7);

            }
            if(value.match("^presel-byi"))
            {
                var iip = 'Y';
            }
        });


        var url = rootUrl+'?type=getCountries' + addParams + addClasses;
        var method = "post";
        var data = {};
        jQuery('.countries').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.countries').find("option:eq(0)").html("Select Country");

            if(data.tp == 1){
                if(presel == 'byip')
                {
                    presel = data['presel'];
                    console.log('2 presel is set as ' + presel);
                }


                if(jQuery.inArray("group-continents",cC) > -1)
                {
                    var $select = jQuery('.countries');
                    console.log(data['result']);
                    jQuery.each(data['result'], function(i, optgroups) {
                        var $optgroup = jQuery("<optgroup>", {label: i});
                        if(optgroups.length > 0)
                        {
                            $optgroup.appendTo($select);
                        }

                        jQuery.each(optgroups, function(groupName, options) {
                            var coption = jQuery('<option />');
                            coption.attr('value', options.name).text(options.name);
                            coption.attr('countryid', options.id);
                            
                            if(presel) {
                                if (presel.toUpperCase() == options.id) {
                                    coption.attr('selected', 'selected');
                                }
                            }
                            coption.appendTo($optgroup);
                        });
                    });
                }
                else
                {
                    jQuery.each(data['result'], function(key, val) {
                        var option = jQuery('<option />');
                        option.attr('value', val).text(val);
                        option.attr('countryid', key);

                        if(option.attr('value') == '{{old('company_country')}}') {
    
                          option.attr('selected', 'selected');

                        }
                        jQuery('.countries').append(option);
                       
                    });
                    $('#countryId').selectpicker('refresh');
                }
                if(presel)
                {
                    jQuery('.countries').trigger('change');
                }
                jQuery(".countries").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };

}

jQuery(function() {
    var loc = new locationInfo();
    loc.getCountries();
    jQuery(".countries").on("change", function(ev) {
        var countryId = jQuery("option:selected", this).attr('countryid');
        if(countryId != ''){
            loc.getStates(countryId);
        }
        else{
            jQuery(".states option:gt(0)").remove();
        }
    });
    jQuery(".states").on("change", function(ev) {
        var stateId = jQuery("option:selected", this).attr('stateid');
        if(stateId != ''){
            loc.getCities(stateId);
        }
        else{
            jQuery(".cities option:gt(0)").remove();
        }
    });

    jQuery(".cities").on("change", function(ev) {
        var cityId = jQuery("option:selected", this).val();
        if(cityId != ''){
            loc.confCity(cityId);
        }
    });
});
    </script>
    @endsection
    