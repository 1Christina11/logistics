<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.40682&themeRevisionID=5f30e2a790832f3e96009402"/>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.40682" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.40682" />
    
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/driver_form.css">
	

</head>

<body>
<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/bread-bg.jpg">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span>
<form action="<?php echo site_url('Carriers_drivers/send_driver_info')?>" method="post">
	<div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httac htvam">
            <h1 id="header_1" class="form-header" data-component="header">Career Application Form</h1>
          </div>
        </div>
      </li>
      <li id="cid_23" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_23" class="form-header" data-component="header">Driver Information</h2>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_3">
		  <label class="form-label form-label-top form-label-auto" id="label_3" for="first_3"> Name<span class="form-required">*</span> </label>
        <div id="cid_3" class="form-input-wide jf-required" data-layout="full">
          <div data-wrapper-react="true">
              
			  <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" name="first_name" class="form-textbox validate[required]" required />
                  <label class="form-sub-label">First Name</label>
              </span>
              
			  <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" name="last_name" class="form-textbox validate[required]" required />
                  <label class="form-sub-label">Last Name</label>
              </span>
              
			</div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_4"><label class="form-label form-label-top form-label-auto" id="label_4" for="input_4"> Email<span class="form-required">*</span> </label>
        <div id="cid_4" class="form-input-wide jf-required" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top">
			<input type="email" id="input_4" name="e_mail" class="form-textbox validate[required, Email]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="email" aria-labelledby="label_4 sublabel_input_4" required="" />
			<label class="form-sub-label" for="input_4" id="sublabel_input_4" style="min-height:13px" aria-hidden="false">example@example.com</label></span> </div>
      </li>
        
<!--
      <span class="form-sub-label-container" style="vertical-align:top">
          <input type="text" name="last_name" class="form-textbox validate[required]" required />
          <label class="form-sub-label">example@example.com</label>
      </span>
-->
        
        
      <li class="form-line jf-required" data-type="control_address" id="id_5"><label class="form-label form-label-top form-label-auto" id="label_5" for="input_5_addr_line1">Address<span class="form-required">*</span> </label>
        <div id="cid_5" class="form-input-wide jf-required" data-layout="full">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span class="form-address-line form-address-street-line jsTest-address-lineField"><span class="form-sub-label-container" style="vertical-align:top">
				<input type="text" id="input_5_addr_line1" name="adderess_1" class="form-textbox validate[required] form-address-line" data-defaultvalue="" autoComplete="section-input_5 address-line1" value="" data-component="address_line_1" aria-labelledby="label_5 sublabel_5_addr_line1" required="" /><label class="form-sub-label" for="input_5_addr_line1" id="sublabel_5_addr_line1" style="min-height:13px" aria-hidden="false">Street Address</label></span></span></div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span class="form-address-line form-address-street-line jsTest-address-lineField"><span class="form-sub-label-container" style="vertical-align:top">
				<input type="text" id="input_5_addr_line2" name="address_2" class="form-textbox form-address-line" data-defaultvalue="" autoComplete="section-input_5 address-line2" value="" data-component="address_line_2" aria-labelledby="label_5 sublabel_5_addr_line2" />
				<label class="form-sub-label" for="input_5_addr_line2" id="sublabel_5_addr_line2" style="min-height:13px" aria-hidden="false">Street Address Line 2</label></span></span></div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span class="form-address-line form-address-city-line jsTest-address-lineField "><span class="form-sub-label-container" style="vertical-align:top">
				<input type="text" id="input_5_city" name="city" class="form-textbox validate[required] form-address-city" data-defaultvalue="" autoComplete="section-input_5 address-level2" value="" data-component="city" aria-labelledby="label_5 sublabel_5_city" required="" />
				<label class="form-sub-label" for="input_5_city" id="sublabel_5_city" style="min-height:13px" aria-hidden="false">City</label></span></span><span class="form-address-line form-address-state-line jsTest-address-lineField "><span class="form-sub-label-container" style="vertical-align:top">
				<input type="text" id="input_5_state" name="state" class="form-textbox validate[required] form-address-state" data-defaultvalue="" autoComplete="section-input_5 address-level1" value="" data-component="state" aria-labelledby="label_5 sublabel_5_state" required="" />
				<label class="form-sub-label" for="input_5_state" id="sublabel_5_state" style="min-height:13px" aria-hidden="false">State / Province</label></span></span></div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span class="form-address-line form-address-zip-line jsTest-address-lineField "><span class="form-sub-label-container" style="vertical-align:top">
				<input type="text" id="input_5_postal" name="zip_code" class="form-textbox validate[required] form-address-postal" data-defaultvalue="" autoComplete="section-input_5 postal-code" value="" data-component="zip" aria-labelledby="label_5 sublabel_5_postal" required="" />
				<label class="form-sub-label" for="input_5_postal" id="sublabel_5_postal" style="min-height:13px" aria-hidden="false">Postal / Zip Code</label></span></span></div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_phone" id="id_6"><label class="form-label form-label-top form-label-auto" id="label_6" for="input_6_full">Phone Number<span class="form-required">*</span> </label>
        <div id="cid_6" class="form-input-wide jf-required" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top">
			<input type="tel" id="input_6_full" name="phone" data-type="mask-number" class="mask-phone-number form-textbox validate[required, Fill Mask]" data-defaultvalue="" autoComplete="section-input_6 tel-national" style="width:310px" data-masked="true" value="" placeholder="(000) 000-0000" data-component="phone" aria-labelledby="label_6" required="" />
			<label class="form-sub-label is-empty" for="input_6_full" id="sublabel_6_masked" style="min-height:13px" aria-hidden="false"></label></span> </div>
      </li>
      <li class="form-line jf-required" data-type="control_datetime" id="id_7"><label class="form-label form-label-top form-label-auto" id="label_7" for="lite_mode_7"> Date of Birth<span class="form-required">*</span> </label>
        <div id="cid_7" class="form-input-wide jf-required" data-layout="half">
          <div data-wrapper-react="true">
            <div style="display:none"><span class="form-sub-label-container" style="vertical-align:top">
				<input type="date" class="form-textbox validate[required, limitDate]" id="month_7" name="birth_date" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_7 sublabel_7_month" />
				<span class="date-separate" aria-hidden="true"> -</span><label class="form-sub-label" for="month_7" id="sublabel_7_month" style="min-height:13px" aria-hidden="false">Month</label></span><span class="form-sub-label-container" style="vertical-align:top">
<!--				<input type="date" class="form-textbox validate[required, limitDate]" id="day_7" name="day" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_7 sublabel_7_day" /><span class="date-separate" aria-hidden="true"> -</span><label class="form-sub-label" for="day_7" id="sublabel_7_day" style="min-height:13px" aria-hidden="false">Day</label></span><span class="form-sub-label-container" style="vertical-align:top">-->
				
<!--
				<input type="date" class="form-textbox validate[required, limitDate]" id="year_7" name="year" size="4" data-maxlength="4" data-age="" maxLength="4" value="" required="" autoComplete="off" aria-labelledby="label_7 sublabel_7_year" /><label class="form-sub-label" for="year_7" id="sublabel_7_year" style="min-height:13px" aria-hidden="false">Year</label></span></div><span class="form-sub-label-container" style="vertical-align:top">
			  <input type="text" class="form-textbox validate[required, limitDate, validateLiteDate]" id="lite_mode_7" size="12" data-maxlength="12" maxLength="12" data-age="" value="" required="" data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY" autoComplete="off" aria-labelledby="label_7 sublabel_7_litemode" /><img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_7_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2"/><label class="form-sub-label" for="lite_mode_7" id="sublabel_7_litemode" style="min-height:13px" aria-hidden="false">Date</label></span>
-->
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_26">
		  <label class="form-label form-label-top form-label-auto" id="label_26" for="input_26">Are you eligible to work in the US?<span class="form-required">*</span> </label>
        <div id="cid_26" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_26" data-component="radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
			  <input type="radio" aria-describedby="label_26" class="form-radio validate[required]" id="input_26_0" name="work_in_us" value="Yes" required=""/>
			  <label id="label_input_26_0" for="input_26_0">Yes</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
			  <input type="radio" aria-describedby="label_26" class="form-radio validate[required]" id="input_26_1" name="areYou" value="No" required=""/>
			  <label id="label_input_26_1" for="input_26_1">No</label></span></div>
        </div>
      </li>
			
			<li class="form-line jf-required" data-type="control_email" id="id_4"><label class="form-label form-label-top form-label-auto" id="label_4" for="input_4"> Email<span class="form-required">*</span> </label>
        <div id="cid_4" class="form-input-wide jf-required" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top">
			<input type="email" id="input_4" name="e_mail" class="form-textbox validate[required, Email]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="email" aria-labelledby="label_4 sublabel_input_4" required="" />
			<label class="form-sub-label" for="input_4" id="sublabel_input_4" style="min-height:13px" aria-hidden="false">example@example.com</label></span> </div>
      </li>
			
<!--
      <li class="form-line jf-required" data-type="control_checkbox" id="id_27"><label class="form-label form-label-top form-label-auto" id="label_27" for="input_27">In which cities can you work?<span class="form-required">*</span> </label>
		  
	

      </li>
-->
      <li class="form-line jf-required" data-type="control_dropdown" id="id_8">
		  <label class="form-label form-label-top form-label-auto" id="label_8" for="input_8"> Type of the Vehicle<span class="form-required">*</span> </label>
        <div id="cid_8" class="form-input-wide jf-required" data-layout="half"> <select class="form-dropdown validate[required]" id="input_8" name="vehicle_type" style="width:310px" data-component="dropdown" required="" aria-label="Type of the Vehicle">
            <option value="">Please select</option>
            <option value="Van">Van</option>
            <option value="Pickup">Pickup</option>
            <option value="SUV">SUV</option>
            <option value="Sedan">Sedan</option>
            <option value="Hatchback">Hatchback</option>
            <option value="Bus">Bus</option>
            <option value="Truck">Truck</option>
            <option value="Mini Truck">Mini Truck</option>
            <option value="Coupe">Coupe</option>
            <option value="Motorcycle">Motorcycle</option>
          </select> 
		  </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_18"><label class="form-label form-label-top form-label-auto" id="label_18" for="input_18"> Driver's License Number<span class="form-required">*</span> </label>
        <div id="cid_18" class="form-input-wide jf-required" data-layout="half"> 
			<input type="text" id="input_18" name="driverslicense" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_18" required="" />
		</div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_19">
		  <label class="form-label form-label-top form-label-auto" id="label_19" for="input_19"> Insurance Provider<span class="form-required">*</span>
		  </label>
        <div id="cid_19" class="form-input-wide jf-required" data-layout="half"> 
			<input type="text" id="input_19" name="insuranceprovider" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_19" required="" /> 
		</div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_20"><label class="form-label form-label-top form-label-auto" id="label_20" for="input_20"> Insurance Policy Number<span class="form-required">*</span> </label>
        <div id="cid_20" class="form-input-wide jf-required" data-layout="half"> 
			<input type="text" id="input_20" name="insurancepolicy" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_20" required="" />
		</div>
      </li>
      <li id="cid_11" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_11" class="form-header" data-component="header">Availability</h2>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_datetime" id="id_9"><label class="form-label form-label-top form-label-auto" id="label_9" for="lite_mode_9"> When can you start? </label>
        <div id="cid_9" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true">
            <div style="display:none">
				<span class="form-sub-label-container" style="vertical-align:top">
				<input type="date" class="form-textbox validate[limitDate]" id="month_9" name="month2" size="2" data-maxlength="2" data-age="" maxLength="2" value="" autoComplete="off" aria-labelledby="label_9 sublabel_9_month" />
				<span class="date-separate" aria-hidden="true"> -</span>
				<label class="form-sub-label" for="month_9" id="sublabel_9_month" style="min-height:13px" aria-hidden="false">Month</label>
				</span>
				<span class="form-sub-label-container" style="vertical-align:top">
				<input type="date" class="form-textbox validate[limitDate]" id="day_9" name="day2" size="2" data-maxlength="2" data-age="" maxLength="2" value="" autoComplete="off" aria-labelledby="label_9 sublabel_9_day" /><span class="date-separate" aria-hidden="true"> -</span>
				<label class="form-sub-label" for="day_9" id="sublabel_9_day" style="min-height:13px" aria-hidden="false">Day</label>
				</span><span class="form-sub-label-container" style="vertical-align:top">
				<input type="date" class="form-textbox validate[limitDate]" id="year_9" name="year2" size="4" data-maxlength="4" data-age="" maxLength="4" value="" autoComplete="off" aria-labelledby="label_9 sublabel_9_year" />
				<label class="form-sub-label" for="year_9" id="sublabel_9_year" style="min-height:13px" aria-hidden="false">Year</label>
				</span>
			  </div>
			  <span class="form-sub-label-container" style="vertical-align:top">
			  <input type="text" name="startdate" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_9" size="12" data-maxlength="12" maxLength="12" data-age="" value="" data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY" autoComplete="off" aria-labelledby="label_9 sublabel_9_litemode" />
<!--			  <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_9_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />-->
			  <label class="form-sub-label" for="lite_mode_9" id="sublabel_9_litemode" style="min-height:13px" aria-hidden="false">Date</label></span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_time" id="id_10"><label class="form-label form-label-top form-label-auto" id="label_10" for="input_10_hourSelect"> Monday </label>
        <div id="cid_10" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <div class="time-wrapper"><span class="form-sub-label-container hasAMPM" style="vertical-align:top">
				<input type="time" class="time-dropdown form-textbox" id="input_10_timeInput" name="q10_monday[timeInput]" placeholder="HH : MM" aria-labelledby="label_10 sublabel_10_hour" data-mask="hh:MM" value="" data-version="v2" />
				<input type="hidden" class="form-hidden-time" id="input_10_hourSelect" name="mondayhour1" />
				<input type="hidden" class="form-hidden-time" id="input_10_minuteSelect" name="mondayminute1" /><label data-seperate-translate="true" class="form-sub-label" for="input_10_timeInput" id="sublabel_10_hour" style="min-height:13px" aria-hidden="false">Hour Minutes</label></span></div>
            <div class="time-wrapper">
				<span class="form-sub-label-container" style="vertical-align:top">
				<select class="time-dropdown form-dropdown" id="input_10_ampm" name="mondayampm1" data-component="time-ampm" aria-labelledby="label_10 sublabel_10_ampm">
                  <option selected="" value="AM">AM</option>
                  <option value="PM">PM</option>
                </select>
				<label class="form-sub-label" for="input_10_ampm" id="sublabel_10_ampm" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">AM/PM Option</label></span>
			  </div><span class="form-sub-label-container until-wrapper" style="vertical-align:top">
              <div class="until-text" tabindex="0" id="until_10">Until</div><label class="form-sub-label" for="until_10" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">until</label>
            </span>
            <div class="time-wrapper"><span class="form-sub-label-container hasAMPM" style="vertical-align:top">
				<input type="time" class="time-dropdown form-textbox" id="input_10_timeInputRange" name="q10_monday[timeInputRange]" placeholder="HH : MM" aria-labelledby="label_10 sublabel_10_hourRange" data-mask="hh:MM" value="" data-version="v2" />
				<input type="hidden" class="form-hidden-time" id="input_10_hourSelectRange" name="mondayhour2" />
				<input type="hidden" class="form-hidden-time" id="input_10_minuteSelectRange" name="mondayminute2" /><label data-seperate-translate="true" class="form-sub-label" for="input_10_timeInputRange" id="sublabel_10_hourRange" style="min-height:13px" aria-hidden="false">Hour Minutes</label></span></div>
            <div class="time-wrapper"><span class="form-sub-label-container" style="vertical-align:top"><select class="time-dropdown form-dropdown" id="input_10_ampmRange" name="mondayampm2" data-component="time-ampm-range" aria-labelledby="label_10 sublabel_10_ampmRange">
                  <option selected="" value="AM">AM</option>
                  <option value="PM">PM</option>
                </select><label class="form-sub-label" for="input_10_ampmRange" id="sublabel_10_ampmRange" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">AM/PM Option</label></span></div><span class="form-sub-label-container" style="vertical-align:top">
			  <input type="hidden" id="duration_10_ampmRange" name="q10_monday[timeRangeDuration]" /><span tabindex="0" id="input_10_dummy"></span></span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_time" id="id_12"><label class="form-label form-label-top form-label-auto" id="label_12" for="input_12_hourSelect"> Tuesday </label>
        <div id="cid_12" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <div class="time-wrapper"><span class="form-sub-label-container hasAMPM" style="vertical-align:top">
				<input type="time" class="time-dropdown form-textbox" id="input_12_timeInput" name="q12_tuesday[timeInput]" placeholder="HH : MM" aria-labelledby="label_12 sublabel_12_hour" data-mask="hh:MM" value="" data-version="v2" />
				<input type="hidden" class="form-hidden-time" id="input_12_hourSelect" name="tuesdayhour1" />
				<input type="hidden" class="form-hidden-time" id="input_12_minuteSelect" name="tuesdayminute1" /><label data-seperate-translate="true" class="form-sub-label" for="input_12_timeInput" id="sublabel_12_hour" style="min-height:13px" aria-hidden="false">Hour Minutes</label></span></div>
            <div class="time-wrapper"><span class="form-sub-label-container" style="vertical-align:top"><select class="time-dropdown form-dropdown" id="input_12_ampm" name="tuesdayampm1" data-component="time-ampm" aria-labelledby="label_12 sublabel_12_ampm">
                  <option selected="" value="AM">AM</option>
                  <option value="PM">PM</option>
                </select><label class="form-sub-label" for="input_12_ampm" id="sublabel_12_ampm" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">AM/PM Option</label></span></div><span class="form-sub-label-container until-wrapper" style="vertical-align:top">
              <div class="until-text" tabindex="0" id="until_12">Until</div><label class="form-sub-label" for="until_12" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">until</label>
            </span>
            <div class="time-wrapper"><span class="form-sub-label-container hasAMPM" style="vertical-align:top">
				<input type="time" class="time-dropdown form-textbox" id="input_12_timeInputRange" name="q12_tuesday[timeInputRange]" placeholder="HH : MM" aria-labelledby="label_12 sublabel_12_hourRange" data-mask="hh:MM" value="" data-version="v2" />
				<input type="hidden" class="form-hidden-time" id="input_12_hourSelectRange" name="tuesdayhour2" />
				<input type="hidden" class="form-hidden-time" id="input_12_minuteSelectRange" name="tuesdayminute2" /><label data-seperate-translate="true" class="form-sub-label" for="input_12_timeInputRange" id="sublabel_12_hourRange" style="min-height:13px" aria-hidden="false">Hour Minutes</label></span></div>
            <div class="time-wrapper"><span class="form-sub-label-container" style="vertical-align:top"><select class="time-dropdown form-dropdown" id="input_12_ampmRange" name="tuesdayampm2" data-component="time-ampm-range" aria-labelledby="label_12 sublabel_12_ampmRange">
                  <option selected="" value="AM">AM</option>
                  <option value="PM">PM</option>
                </select><label class="form-sub-label" for="input_12_ampmRange" id="sublabel_12_ampmRange" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">AM/PM Option</label></span></div><span class="form-sub-label-container" style="vertical-align:top">
			  <input type="hidden" id="duration_12_ampmRange" name="q12_tuesday[timeRangeDuration]" /><span tabindex="0" id="input_12_dummy"></span></span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_time" id="id_13"><label class="form-label form-label-top form-label-auto" id="label_13" for="input_13_hourSelect"> Wednesday </label>
        <div id="cid_13" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <div class="time-wrapper"><span class="form-sub-label-container hasAMPM" style="vertical-align:top">
				<input type="time" class="time-dropdown form-textbox" id="input_13_timeInput" name="q13_wednesday[timeInput]" placeholder="HH : MM" aria-labelledby="label_13 sublabel_13_hour" data-mask="hh:MM" value="" data-version="v2" />
				<input type="hidden" class="form-hidden-time" id="input_13_hourSelect" name="wednesdayhour1" />
				<input type="hidden" class="form-hidden-time" id="input_13_minuteSelect" name="wednesdayminute1" /><label data-seperate-translate="true" class="form-sub-label" for="input_13_timeInput" id="sublabel_13_hour" style="min-height:13px" aria-hidden="false">Hour Minutes</label></span></div>
            <div class="time-wrapper"><span class="form-sub-label-container" style="vertical-align:top"><select class="time-dropdown form-dropdown" id="input_13_ampm" name="wednesdayampm1" data-component="time-ampm" aria-labelledby="label_13 sublabel_13_ampm">
                  <option selected="" value="AM">AM</option>
                  <option value="PM">PM</option>
                </select><label class="form-sub-label" for="input_13_ampm" id="sublabel_13_ampm" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">AM/PM Option</label></span></div><span class="form-sub-label-container until-wrapper" style="vertical-align:top">
              <div class="until-text" tabindex="0" id="until_13">Until</div><label class="form-sub-label" for="until_13" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">until</label>
            </span>
            <div class="time-wrapper"><span class="form-sub-label-container hasAMPM" style="vertical-align:top">
				<input type="time" class="time-dropdown form-textbox" id="input_13_timeInputRange" name="q13_wednesday[timeInputRange]" placeholder="HH : MM" aria-labelledby="label_13 sublabel_13_hourRange" data-mask="hh:MM" value="" data-version="v2" />
				<input type="hidden" class="form-hidden-time" id="input_13_hourSelectRange" name="wednesdayhour2" />
				<input type="hidden" class="form-hidden-time" id="input_13_minuteSelectRange" name="wednesdayminute2" /><label data-seperate-translate="true" class="form-sub-label" for="input_13_timeInputRange" id="sublabel_13_hourRange" style="min-height:13px" aria-hidden="false">Hour Minutes</label></span></div>
            <div class="time-wrapper"><span class="form-sub-label-container" style="vertical-align:top"><select class="time-dropdown form-dropdown" id="input_13_ampmRange" name="wednesdayampm2" data-component="time-ampm-range" aria-labelledby="label_13 sublabel_13_ampmRange">
                  <option selected="" value="AM">AM</option>
                  <option value="PM">PM</option>
                </select><label class="form-sub-label" for="input_13_ampmRange" id="sublabel_13_ampmRange" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">AM/PM Option</label></span></div><span class="form-sub-label-container" style="vertical-align:top">
			  <input type="hidden" id="duration_13_ampmRange" name="q13_wednesday[timeRangeDuration]" /><span tabindex="0" id="input_13_dummy"></span></span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_time" id="id_14"><label class="form-label form-label-top form-label-auto" id="label_14" for="input_14_hourSelect"> Thursday </label>
        <div id="cid_14" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <div class="time-wrapper"><span class="form-sub-label-container hasAMPM" style="vertical-align:top">
				<input type="time" class="time-dropdown form-textbox" id="input_14_timeInput" name="q14_thursday[timeInput]" placeholder="HH : MM" aria-labelledby="label_14 sublabel_14_hour" data-mask="hh:MM" value="" data-version="v2"/>
				<input type="hidden" class="form-hidden-time" id="input_14_hourSelect" name="thursdayhour1" />
				<input type="hidden" class="form-hidden-time" id="input_14_minuteSelect" name="thursdayminute1" /><label data-seperate-translate="true" class="form-sub-label" for="input_14_timeInput" id="sublabel_14_hour" style="min-height:13px" aria-hidden="false">Hour Minutes</label></span></div>
            <div class="time-wrapper"><span class="form-sub-label-container" style="vertical-align:top"><select class="time-dropdown form-dropdown" id="input_14_ampm" name="thursdayampm1" data-component="time-ampm" aria-labelledby="label_14 sublabel_14_ampm">
                  <option selected="" value="AM">AM</option>
                  <option value="PM">PM</option>
                </select><label class="form-sub-label" for="input_14_ampm" id="sublabel_14_ampm" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">AM/PM Option</label></span></div><span class="form-sub-label-container until-wrapper" style="vertical-align:top">
              <div class="until-text" tabindex="0" id="until_14">Until</div><label class="form-sub-label" for="until_14" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">until</label>
            </span>
            <div class="time-wrapper"><span class="form-sub-label-container hasAMPM" style="vertical-align:top">
				<input type="time" class="time-dropdown form-textbox" id="input_14_timeInputRange" name="q14_thursday[timeInputRange]" placeholder="HH : MM" aria-labelledby="label_14 sublabel_14_hourRange" data-mask="hh:MM" value="" data-version="v2" />
				<input type="hidden" class="form-hidden-time" id="input_14_hourSelectRange" name="thursdayhour2" />
				<input type="hidden" class="form-hidden-time" id="input_14_minuteSelectRange" name="thursdayminute2" /><label data-seperate-translate="true" class="form-sub-label" for="input_14_timeInputRange" id="sublabel_14_hourRange" style="min-height:13px" aria-hidden="false">Hour Minutes</label></span></div>
            <div class="time-wrapper"><span class="form-sub-label-container" style="vertical-align:top"><select class="time-dropdown form-dropdown" id="input_14_ampmRange" name="thursdayampm2" data-component="time-ampm-range" aria-labelledby="label_14 sublabel_14_ampmRange">
                  <option selected="" value="AM">AM</option>
                  <option value="PM">PM</option>
                </select><label class="form-sub-label" for="input_14_ampmRange" id="sublabel_14_ampmRange" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">AM/PM Option</label></span></div><span class="form-sub-label-container" style="vertical-align:top">
			  <input type="hidden" id="duration_14_ampmRange" name="q14_thursday[timeRangeDuration]" /><span tabindex="0" id="input_14_dummy"></span></span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_time" id="id_15"><label class="form-label form-label-top form-label-auto" id="label_15" for="input_15_hourSelect"> Friday </label>
        <div id="cid_15" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <div class="time-wrapper"><span class="form-sub-label-container hasAMPM" style="vertical-align:top">
				<input type="time" class="time-dropdown form-textbox" id="input_15_timeInput" name="q15_friday[timeInput]" placeholder="HH : MM" aria-labelledby="label_15 sublabel_15_hour" data-mask="hh:MM" value="" data-version="v2" />
				<input type="hidden" class="form-hidden-time" id="input_15_hourSelect" name="fridayhour1" />
				<input type="hidden" class="form-hidden-time" id="input_15_minuteSelect" name="fridayminute1" /><label data-seperate-translate="true" class="form-sub-label" for="input_15_timeInput" id="sublabel_15_hour" style="min-height:13px" aria-hidden="false">Hour Minutes</label></span></div>
            <div class="time-wrapper"><span class="form-sub-label-container" style="vertical-align:top"><select class="time-dropdown form-dropdown" id="input_15_ampm" name="fridayampm1" data-component="time-ampm" aria-labelledby="label_15 sublabel_15_ampm">
                  <option selected="" value="AM">AM</option>
                  <option value="PM">PM</option>
                </select><label class="form-sub-label" for="input_15_ampm" id="sublabel_15_ampm" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">AM/PM Option</label></span></div><span class="form-sub-label-container until-wrapper" style="vertical-align:top">
              <div class="until-text" tabindex="0" id="until_15">Until</div><label class="form-sub-label" for="until_15" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">until</label>
            </span>
            <div class="time-wrapper"><span class="form-sub-label-container hasAMPM" style="vertical-align:top">
				<input type="time" class="time-dropdown form-textbox" id="input_15_timeInputRange" name="q15_friday[timeInputRange]" placeholder="HH : MM" aria-labelledby="label_15 sublabel_15_hourRange" data-mask="hh:MM" value="" data-version="v2" />
				<input type="hidden" class="form-hidden-time" id="input_15_hourSelectRange" name="fridayhour2" />
				<input type="hidden" class="form-hidden-time" id="input_15_minuteSelectRange" name="fridayminute2" /><label data-seperate-translate="true" class="form-sub-label" for="input_15_timeInputRange" id="sublabel_15_hourRange" style="min-height:13px" aria-hidden="false">Hour Minutes</label></span></div>
            <div class="time-wrapper"><span class="form-sub-label-container" style="vertical-align:top"><select class="time-dropdown form-dropdown" id="input_15_ampmRange" name="fridayampm2" data-component="time-ampm-range" aria-labelledby="label_15 sublabel_15_ampmRange">
                  <option selected="" value="AM">AM</option>
                  <option value="PM">PM</option>
                </select><label class="form-sub-label" for="input_15_ampmRange" id="sublabel_15_ampmRange" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">AM/PM Option</label></span></div><span class="form-sub-label-container" style="vertical-align:top">
			  <input type="hidden" id="duration_15_ampmRange" name="q15_friday[timeRangeDuration]" /><span tabindex="0" id="input_15_dummy"></span></span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_time" id="id_16"><label class="form-label form-label-top form-label-auto" id="label_16" for="input_16_hourSelect"> Saturday </label>
        <div id="cid_16" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <div class="time-wrapper"><span class="form-sub-label-container hasAMPM" style="vertical-align:top">
				<input type="time" class="time-dropdown form-textbox" id="input_16_timeInput" name="q16_saturday[timeInput]" placeholder="HH : MM" aria-labelledby="label_16 sublabel_16_hour" data-mask="hh:MM" value="" data-version="v2" />
				<input type="hidden" class="form-hidden-time" id="input_16_hourSelect" name="saturdayhour1" />
				<input type="hidden" class="form-hidden-time" id="input_16_minuteSelect" name="saturdayminute1"/>
				<label data-seperate-translate="true" class="form-sub-label" for="input_16_timeInput" id="sublabel_16_hour" style="min-height:13px" aria-hidden="false">Hour Minutes</label></span></div>
            <div class="time-wrapper"><span class="form-sub-label-container" style="vertical-align:top"><select class="time-dropdown form-dropdown" id="input_16_ampm" name="saturdayampm1" data-component="time-ampm" aria-labelledby="label_16 sublabel_16_ampm">
                  <option selected="" value="AM">AM</option>
                  <option value="PM">PM</option>
                </select><label class="form-sub-label" for="input_16_ampm" id="sublabel_16_ampm" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">AM/PM Option</label></span></div><span class="form-sub-label-container until-wrapper" style="vertical-align:top">
              <div class="until-text" tabindex="0" id="until_16">Until</div><label class="form-sub-label" for="until_16" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">until</label>
            </span>
            <div class="time-wrapper"><span class="form-sub-label-container hasAMPM" style="vertical-align:top">
				<input type="time" class="time-dropdown form-textbox" id="input_16_timeInputRange" name="q16_saturday[timeInputRange]" placeholder="HH : MM" aria-labelledby="label_16 sublabel_16_hourRange" data-mask="hh:MM" value="" data-version="v2" />
				<input type="hidden" class="form-hidden-time" id="input_16_hourSelectRange" name="saturdayhour2" />
				<input type="hidden" class="form-hidden-time" id="input_16_minuteSelectRange" name="saturdayminute2" />
				<label data-seperate-translate="true" class="form-sub-label" for="input_16_timeInputRange" id="sublabel_16_hourRange" style="min-height:13px" aria-hidden="false">Hour Minutes</label></span></div>
            <div class="time-wrapper"><span class="form-sub-label-container" style="vertical-align:top"><select class="time-dropdown form-dropdown" id="input_16_ampmRange" name="saturdayampm2" data-component="time-ampm-range" aria-labelledby="label_16 sublabel_16_ampmRange">
                  <option selected="" value="AM">AM</option>
                  <option value="PM">PM</option>
                </select><label class="form-sub-label" for="input_16_ampmRange" id="sublabel_16_ampmRange" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">AM/PM Option</label></span>
			  </div>
			  <span class="form-sub-label-container" style="vertical-align:top"><input type="hidden" id="duration_16_ampmRange" name="q16_saturday[timeRangeDuration]" /><span tabindex="0" id="input_16_dummy"></span></span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_time" id="id_17"><label class="form-label form-label-top form-label-auto" id="label_17" for="input_17_hourSelect"> Sunday </label>
        <div id="cid_17" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <div class="time-wrapper"><span class="form-sub-label-container hasAMPM" style="vertical-align:top">
				<input type="time" class="time-dropdown form-textbox" id="input_17_timeInput" name="q17_sunday[timeInput]" placeholder="HH : MM" aria-labelledby="label_17 sublabel_17_hour" data-mask="hh:MM" value="" data-version="v2" />
				<input type="hidden" class="form-hidden-time" id="input_17_hourSelect" name="sundayhour1" /><input type="hidden" class="form-hidden-time" id="input_17_minuteSelect" name="sundayminute1" />
				<label data-seperate-translate="true" class="form-sub-label" for="input_17_timeInput" id="sublabel_17_hour" style="min-height:13px" aria-hidden="false">Hour Minutes</label></span></div>
            <div class="time-wrapper"><span class="form-sub-label-container" style="vertical-align:top">
				<select class="time-dropdown form-dropdown" id="input_17_ampm" name="sundayampm1" data-component="time-ampm" aria-labelledby="label_17 sublabel_17_ampm">
                  <option selected="" value="AM">AM</option>
                  <option value="PM">PM</option>
                </select><label class="form-sub-label" for="input_17_ampm" id="sublabel_17_ampm" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">AM/PM Option</label></span></div><span class="form-sub-label-container until-wrapper" style="vertical-align:top">
              <div class="until-text" tabindex="0" id="until_17">Until</div><label class="form-sub-label" for="until_17" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">until</label>
            </span>
            <div class="time-wrapper"><span class="form-sub-label-container hasAMPM" style="vertical-align:top">
				<input type="time" class="time-dropdown form-textbox" id="input_17_timeInputRange" name="q17_sunday[timeInputRange]" placeholder="HH : MM" aria-labelledby="label_17 sublabel_17_hourRange" data-mask="hh:MM" value="" data-version="v2" />
				<input type="hidden" class="form-hidden-time" id="input_17_hourSelectRange" name="sundayhour2" />
				<input type="hidden" class="form-hidden-time" id="input_17_minuteSelectRange" name="sundayminute2" /><label data-seperate-translate="true" class="form-sub-label" for="input_17_timeInputRange" id="sublabel_17_hourRange" style="min-height:13px" aria-hidden="false">Hour Minutes</label></span></div>
            <div class="time-wrapper"><span class="form-sub-label-container" style="vertical-align:top">
				<select class="time-dropdown form-dropdown" id="input_17_ampmRange" name="sundayampm2" data-component="time-ampm-range" aria-labelledby="label_17 sublabel_17_ampmRange">
                  <option selected="" value="AM">AM</option>
                  <option value="PM">PM</option>
                </select><label class="form-sub-label" for="input_17_ampmRange" id="sublabel_17_ampmRange" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">AM/PM Option</label></span></div><span class="form-sub-label-container" style="vertical-align:top">
			  <input type="hidden" id="duration_17_ampmRange" name="q17_sunday[timeRangeDuration]" /><span tabindex="0" id="input_17_dummy"></span></span>
          </div>
        </div>
      </li>
        
        
        
        
<!--
      <li class="form-line" data-type="control_divider" id="id_24">
        <div id="cid_24" class="form-input-wide" data-layout="full">
          <div class="divider" data-component="divider" style="border-bottom-width:1px;border-bottom-style:solid;border-color:#e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
        </div>
      </li>
-->
        
        
        
<!--
      <li class="form-line" data-type="control_text" id="id_21">
        <div id="cid_21" class="form-input-wide" data-layout="full">
          <div id="text_21" class="form-html" data-component="text" tabindex="0">
            <p>By signing this application form, I accept the following requirements of the aggreement:<br /><br />1. The information about driver's license is valid.</p>
            <p>2. My vehicle is fully insured.</p>
            <p>3. I accept all the responsibilities for injury, damage and traffic violations.</p>
            <p>4. I acknowledge that I do not smoke in the vehicle.</p>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_signature" id="id_22"><label class="form-label form-label-top form-label-auto" id="label_22" for="input_22"> Signature<span class="form-required">*</span> </label>
        <div id="cid_22" class="form-input-wide jf-required" data-layout="half">
          <div data-wrapper-react="true">
            <div id="signature_pad_22" class="signature-pad-wrapper" style="width:312px;height:116px">
              <div data-wrapper-react="true">
                [if IE 7]><script type="text/javascript" src="/js/vendor/json2.js"></script><![endif]
              </div>
              <div class="signature-line signature-wrapper signature-placeholder" data-component="signature" style="width:312px;height:116px;position:relative">
                <div id="sig_pad_22" data-width="310" data-height="114" data-id="22" data-required="true" class="pad validate[required]" aria-labelledby="label_22"></div>
				  <input type="hidden" name="q22_signature" class="output4" id="input_22" />
              </div>
				<span class="clear-pad-btn clear-pad" role="button" tabindex="0">Clear</span>
            </div>
            <div data-wrapper-react="true">
              <script type="text/javascript">
                window.signatureForm = true
              </script>
            </div>
          </div>
        </div>
      </li>
-->
        
        
        
<!--
      <div class="col-lg-6">
								<button type="submit" class="ft-sb-button">   Submit Now</button>
							</div>
-->
		<div class="col-lg-12">
										<button>Submit </button>
									</div>
        <li style="display:none">Should be Empty: 
		  <input type="text" name="website" value="" />
		</li>
    </ul>
  </div>
<!--
  <script>
    JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
    JotForm.poweredByText = "Powered by Jotform";
  </script><input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="230920463291553" />
  <script type="text/javascript">
    var all_spc = document.querySelectorAll("form[id='230920463291553'] .si" + "mple" + "_spc");
    for (var i = 0; i < all_spc.length; i++)
    {
      all_spc[i].value = "230920463291553-230920463291553";
    }
  </script>
-->
<!--  <div class="formFooter-heightMask"></div>-->
<!--
  <div class="formFooter f6 branding21">
    <div class="formFooter-wrapper formFooter-leftSide"><a href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=230920463291553&utm_content=jotform_logo&utm_campaign=powered_by_jotform_le" target="_blank" class="formFooter-logoLink"><img class="formFooter-logo" src="https://cdn.jotfor.ms/assets/img/logo2021/jotform-logo-white.svg" alt="Jotform Logo" style="height: 44px;"></a></div>
    <div class="formFooter-wrapper formFooter-rightSide"><span class="formFooter-text">Now create your own Jotform - It's free!</span><a class="formFooter-button" href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=230920463291553&utm_content=jotform_button&utm_campaign=powered_by_jotform_le" target="_blank">Create your own Jotform</a></div>
  </div>
-->
</form>
</section>
