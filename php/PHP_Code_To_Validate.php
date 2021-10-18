<?php

 

          //this page is not accessable via broswer url

          if (!defined("_VALID_PHP"))

                    die('Direct access to this location is not allowed.');

 

          //Set session data from POST

          $_SESSION["intake"]["students"]["drug_of_choice"] = $_POST["drug_of_choice"];

          $_SESSION["intake"]["students"]["first_contact"] = $_POST["first_contact_yr"]."-".$_POST["first_contact_mo"]."-".$_POST["first_contact_da"];

          $_SESSION["intake"]["intakes"]["referral_source"] = $_POST["referral_source"];

          $_SESSION["intake"]["intakes"]["referral_reason"] = $_POST["referral_reason"];

          $_SESSION["intake"]["students"]["gender"] = $_POST["gender"];

          $_SESSION["intake"]["students"]["maiden_name"] = $_POST["maiden_name"];

          $_SESSION["intake"]["students"]["race"] = $_POST["race"];

          $_SESSION["intake"]["students"]["dl_state"] = $_POST["dl_state"];

          $_SESSION["intake"]["students"]["dl_num"] = $_POST["dl_num"];

          $_SESSION["intake"]["students"]["phone_number"] = $_POST["phone_number"];

          $_SESSION["intake"]["students"]["cell_number"] = $_POST["cell_number"];

          $_SESSION["intake"]["students"]["work_number"] = $_POST["work_number"];

          $_SESSION["intake"]["students"]["other_fax_number"] = $_POST["other_fax_number"];

          $_SESSION["intake"]["students"]["email"] = $_POST["email"];

          $_SESSION["intake"]["addresses"]["line_1"] = $_POST["line_1"];

          $_SESSION["intake"]["addresses"]["line_2"] = $_POST["line_2"];

          $_SESSION["intake"]["addresses"]["line_3"] = $_POST["line_3"];

          $_SESSION["intake"]["addresses"]["city"] = $_POST["city"];

          ($_POST["state_province_country"]=="Other") ? $_SESSION["intake"]["addresses"]["state_province_country"] =  $_POST["other_state"]: $_SESSION["intake"]["addresses"]["state_province_country"] = $_POST["state_province_country"];

          $_SESSION["intake"]["addresses"]["post_code"] = $_POST["post_code"];

          $_SESSION["intake"]["addresses"]["country"] = $_POST["country"];

          $_SESSION["intake"]["addresses"]["comments"] = $_POST["comments"];

 

          //how many contacts adding

          $num_contacts = $_POST["num_contacts"];

 

          //Set Page variables from session data

          $CARF_ID = $_SESSION["intake"]["students"]["carf_id"];

          $First_Name = $_SESSION["intake"]["students"]["first_name"];

          $Middle_Name = $_SESSION["intake"]["students"]["middle_name"];

          $Last_Name = $_SESSION["intake"]["students"]["last_name"];

 

?>

                    <div id="boxAddStudentDet" class="boxes">

                              <div class="boxHeader">

                                  <div id="addStudentIcon" class="boxIcons">

                            </div>

                            <div class="boxTitle">

                                      <h2>Add Contacts for <?php echo $CARF_ID.": ".$First_Name." ".$Middle_Name." ".$Last_Name; ?></h2>

                            </div>

                            <div class="boxSliderBtns">

                            </div>

                        </div>

                        <div class="boxContent">

                                  <form id="addStudDet" name="addStudDet" action="addstudent.php?b=03" onsubmit="return validateForm(this,'comments[]','','','','','','','','email');" method="post" >

                                <table id="StudDetformTable" class="full">

                                          <?php for($i=0;$i<$num_contacts;$i++){ ?>

                                    <tr>

                                              <td colspan="2"><h3><b>Add New Contact</b></h3></td>

                                    </tr>

                                    <tr>

                                              <td colspan="2"><h3>Contact's First Name </h3></td>

                                    </tr>

                                    <tr>

                                              <td class="column1a"><input name="first_name[]" id="kin_f_name" type="text" /></td>

                                    </tr>

                                    <tr>

                                              <td colspan="2"><h3>Contact's Last Name </h3></td>

                                    </tr>

                                    <tr>

                                              <td class="column1a"><input name="last_name[]" id="kin_l_name" type="text" /></td>

                                    </tr>

                                    <tr>

                                              <td class="column1a"><p>

                                                  <input type="checkbox" value="<?php print $i; ?>" name="telephone_release[]" />  Telephone Release<br />

                                            <input type="radio" value="<?php print $i; ?>" name="primary_contact" />  Primary Contact<br />

                                            <input type="checkbox" value="<?php print $i; ?>" name="emergency_contact[]" />  Emergency Contact<br />

                                            <input type="checkbox" value="<?php print $i; ?>" name="financier[]" />  Financier<br />

                                            <input type="checkbox" value="<?php print $i; ?>" name="send_ed_pack[]" />  Send Drug Education Pack

                                        </p></td>

                                    </tr>

                                    <tr>

                                              <td colspan="2"><h3>Contact's Relationship </h3></td>

                                    </tr>

                                    <tr>

                                              <td class="column1a">

                                                  <select name="relationship[]" id="kin_relation">

                                                      <option value=""></option>

                                                <option value="Spouse">Spouse</option>

                                                <option value="Biological Mother">Mother (Biological)</option>

                                                <option value="Biological Father">Father (Biological)</option>

                                                <option value="Daughter">Daughter</option>

                                                <option value="Son">Son</option>

                                                <option value="Sister">Full Sister</option>

                                                <option value="Brother">Full Brother</option>

                                                <option value="Aunt">Aunt</option>

                                                <option value="Uncle">Uncle</option>

                                                <option value="Grandmother">Grandmother</option>

                                                <option value="Grandfather">Grandfather</option>

                                                <option value="Step Mother">Step Mother</option>

                                                <option value="Step Father">Step Father</option>

                                                <option value="Half Sister">Half Sister</option>

                                                <option value="Half Brother">Half Brother</option>

                                                <option value="Step Sister">Step Sister</option>

                                                <option value="Step Brother">Step Brother</option>

                                                <option value="Mother in law">Mother-In-Law</option>

                                                <option value="Father in law">Father-In-Law</option>

                                                <option value="Sister in law">Sister-In-Law</option>

                                                <option value="Brother in law">Brother-In-Law</option>

                                                <option value="Daughter in law">Daughter-In-Law</option>

                                                <option value="Son in law">Son-In-Law</option>

                                                <option value="Ex-spouse">Ex-spouse</option>

                                                <option value="Co-worker">Co-worker</option>

                                                <option value="Friend">Friend</option>

                                                <option value="Other Relative">Other Relative (Specify in Comments)</option>

                                                <option value="Other">Other (Specify in Comments)</option>

                                                  </select>

                                        </td>

                                    </tr>

                                    <tr>

                                              <td colspan="2"><h3>Contact's Phone Number</h3></td>

                                    </tr>

                                    <tr>

                                              <td class="column1a"><input name="k_phnum_<?php print $i; ?>" id="k_phnum_<?php print $i; ?>" type="radio" value="yes" onClick="notAnsweredQues('k_phNumber_<?php print $i; ?>', this, true);" /><input type="text" name="phone_number[]" id="k_phNumber_<?php print $i; ?>" onkeydown="setVal('k_phnum_<?php print $i; ?>')" onkeypress="return onlyChar(event,true,false,false,false,'','');" />  <input name="k_phnum_<?php print $i; ?>" type="radio" onClick="notAvailableQues('k_phNumber_<?php print $i; ?>', this);" />No Number</td>

                                        <td class="alignright"><input name="k_phnum_<?php print $i; ?>" type="radio" onClick="notAnsweredQues('k_phNumber_<?php print $i; ?>', this);" />Question Not Answered</td>

                                    </tr>

                                    <tr>

                                              <td colspan="2"><h3>Contact's Cell Phone Number</h3></td>

                                    </tr>

                                    <tr>

                                              <td class="column1a"><input name="k_cell_phnum_<?php print $i; ?>" id="k_cell_phnum_<?php print $i; ?>" type="radio" onClick="notAnsweredQues('k_cellNumber_<?php print $i; ?>', this, true);" /><input type="text" name="cell_number[]" id="k_cellNumber_<?php print $i; ?>" onkeydown="setVal('k_cell_phnum_<?php print $i; ?>')" onkeypress="return onlyChar(event,true,false,false,false,'','');" />  <input name="k_cell_phnum_<?php print $i; ?>" type="radio" onClick="notAvailableQues('k_cellNumber_<?php print $i; ?>', this);" />No Number</td>

                                        <td class="alignright"><input name="k_cell_phnum_<?php print $i; ?>" type="radio" onClick="notAnsweredQues('k_cellNumber_<?php print $i; ?>', this);" />Question Not Answered</td>

                                    </tr>

                                    <tr>

                                              <td colspan="2"><h3>Contact's Other Phone Number</h3></td>

                                    </tr>

                                    <tr>

                                              <td class="column1a"><input name="k_other_phnum_<?php print $i; ?>" id="k_other_phnum_<?php print $i; ?>" type="radio" onClick="notAnsweredQues('k_otherNumber_<?php print $i; ?>', this, true);" /><input type="text" name="other_number[]" id="k_otherNumber_<?php print $i; ?>" onkeydown="setVal('k_other_phnum_<?php print $i; ?>')" onkeypress="return onlyChar(event,true,false,false,false,'','');" />  <input name="k_other_phnum" type="radio" onClick="notAvailableQues('k_otherNumber_<?php print $i; ?>', this);" />No Number</td>

                                        <td class="alignright"><input name="k_other_phnum_<?php print $i; ?>" type="radio" onClick="notAnsweredQues('k_otherNumber_<?php print $i; ?>', this);" />Question Not Answered</td>

                                    </tr>

                                    <tr>

                                              <td colspan="2"><h3>Contact's Email Address</h3></td>

                                    </tr>

                                    <tr>

                                              <td class="column1a"><input name="k_emailSel_<?php print $i; ?>" id="k_emailSel_<?php print $i; ?>" type="radio" onClick="notAnsweredQues('k_email_<?php print $i; ?>', this, true);" /><input name="email[]" id="k_email_<?php print $i; ?>" type="text" onkeydown="setVal('k_emailSel_<?php print $i; ?>')" onblur="validateEmail(this)" />  <input name="k_emailSel_<?php print $i; ?>" type="radio" onClick="notAvailableQues('k_email_<?php print $i; ?>', this);" />No Email</td>

                                        <td class="alignright"><input name="k_emailSel_<?php print $i; ?>" type="radio" onClick="notAnsweredQues('k_email_<?php print $i; ?>', this);" />Question Not Answered</td>

                                    </tr>

                                    <tr>

                                              <td><h3>What is the student's address?</h3></td>

                                    </tr>

                                    <tr>

                                              <td class="indentation"><input type="text" name="line_1[]" id="Line_1_<?php print $i; ?>" value="Line 1" style="width:450px;" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" /></td>

                                    </tr>

                                    <tr>

                                              <td class="indentation"><input type="text" name="line_2[]" id="Line_2_<?php print $i; ?>" value="Line 2" style="width:450px;" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" /></td>

                                    </tr>

                                    <tr>

                                              <td class="indentation"><input type="text" name="line_3[]" id="Line_3_<?php print $i; ?>" value="Line 3" style="width:450px;" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" /></td>

                                    </tr>

                                    <tr>

                                              <td class="indentation">

                                            <input type="text" name="city[]" id="City_<?php print $i; ?>" value="City" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" /> 

                                            <select name="state_province_country[]" id="State_<?php print $i; ?>" onchange="

                                            if(this.value==''){

                                                      document.getElementById('otherState_<?php print $i; ?>').style.display = 'none';

                                                document.getElementById('otherState_<?php print $i; ?>').value='Other State';

                                                setInput('Country_<?php print $i; ?>','','select',false);

                                            } else if(this.value=='Other'){

                                                      document.getElementById('otherState_<?php print $i; ?>').style.display = 'inline-block';

                                                document.getElementById('otherState_<?php print $i; ?>').value='';

                                                setInput('Country_<?php print $i; ?>','','select',false);

                                            }else{

                                                      document.getElementById('otherState_<?php print $i; ?>').style.display = 'none';

                                                document.getElementById('otherState_<?php print $i; ?>').value='Other State';

                                                setInput('Country_<?php print $i; ?>','U.S.A.','select',true);

                                            }" >

                                                <option value="">Select State</option>

                                                <option value="AL">Alabama</option>

                                                <option value="AK">Alaska</option>

                                                <option value="AZ">Arizona</option>

                                                <option value="AR">Arkansas</option>

                                                <option value="CA">California</option>

                                                <option value="CO">Colorado</option>

                                                <option value="CT">Connecticut</option>

                                                <option value="DE">Delaware</option>

                                                <option value="FL">Florida</option>

                                                <option value="GA">Georgia</option>

                                                <option value="HI">Hawaii</option>

                                                <option value="ID">Idaho</option>

                                                <option value="IL">Illinois</option>

                                                <option value="IN">Indiana</option>

                                                <option value="IA">Iowa</option>

                                                <option value="KS">Kansas</option>

                                                <option value="KY">Kentucky</option>

                                                <option value="LA">Louisiana</option>

                                                <option value="ME">Maine</option>

                                                <option value="MD">Maryland</option>

                                                <option value="MA">Massachusetts</option>

                                                <option value="MI">Michigan</option>

                                                <option value="MN">Minnesota</option>

                                                <option value="MS">Mississippi</option>

                                                <option value="MO">Missouri</option>

                                                <option value="MT">Montana</option>

                                                <option value="NE">Nebraska</option>

                                                <option value="NV">Nevada</option>

                                                <option value="NH">New Hampshire</option>

                                                <option value="NJ">New Jersey</option>

                                                <option value="NM">New Mexico</option>

                                                <option value="NY">New York</option>

                                                <option value="NC">North Carolina</option>

                                                <option value="ND">North Dakota</option>

                                                <option value="OH">Ohio</option>

                                                <option value="OK">Oklahoma</option>

                                                <option value="OR">Oregon</option>

                                                <option value="PA">Pennsylvania</option>

                                                <option value="RI">Rhode Island</option>

                                                <option value="SC">South Carolina</option>

                                                <option value="SD">South Dakota</option>

                                                <option value="TN">Tennessee</option>

                                                <option value="TX">Texas</option>

                                                <option value="UT">Utah</option>

                                                <option value="VT">Vermont</option>

                                                <option value="VA">Virginia</option>

                                                <option value="WA">Washington</option>

                                                <option value="WV">West Virginia</option>

                                                <option value="WI">Wisconsin</option>

                                                <option value="WY">Wyoming</option>

                                                <option value="Other">Other Specify:</option>

                                            </select>

                                            <input type="text" name="other_state[]" id="otherState_<?php print $i; ?>" value="Other State" style="display:none;" />

                                            <input type="text" name="post_code[]" id="Zip_PostalCode_<?php print $i; ?>" value="ZIP" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />

                                        </td>

                                    </tr>

                                    <tr>

                                              <td><h3>Country</h3></td>

                                    </tr>

                                    <tr>

                                              <td>

                                            <select name="country[]" id="Country_<?php print $i; ?>">

                                                <option value="">Select Country</option>

                                                <option value="U.S.A.">United States of America</option>

                                                <option value="Afganistan">Afghanistan</option>

                                                <option value="Albania">Albania</option>

                                                <option value="Algeria">Algeria</option>

                                                <option value="American Samoa">American Samoa</option>

                                                <option value="Andorra">Andorra</option>

                                                <option value="Angola">Angola</option>

                                                <option value="Anguilla">Anguilla</option>

                                                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>

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

                                                <option value="Bonaire">Bonaire</option>

                                                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>

                                                <option value="Botswana">Botswana</option>

                                                <option value="Brazil">Brazil</option>

                                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>

                                                <option value="Brunei">Brunei</option>

                                                <option value="Bulgaria">Bulgaria</option>

                                                <option value="Burkina Faso">Burkina Faso</option>

                                                <option value="Burundi">Burundi</option>

                                                <option value="Cambodia">Cambodia</option>

                                                <option value="Cameroon">Cameroon</option>

                                                <option value="Canada">Canada</option>

                                                <option value="Canary Islands">Canary Islands</option>

                                                <option value="Cape Verde">Cape Verde</option>

                                                <option value="Cayman Islands">Cayman Islands</option>

                                                <option value="Central African Republic">Central African Republic</option>

                                                <option value="Chad">Chad</option>

                                                <option value="Channel Islands">Channel Islands</option>

                                                <option value="Chile">Chile</option>

                                                <option value="China">China</option>

                                                <option value="Christmas Island">Christmas Island</option>

                                                <option value="Cocos Island">Cocos Island</option>

                                                <option value="Colombia">Colombia</option>

                                                <option value="Comoros">Comoros</option>

                                                <option value="Congo">Congo</option>

                                                <option value="Cook Islands">Cook Islands</option>

                                                <option value="Costa Rica">Costa Rica</option>

                                                <option value="Cote DIvoire">Cote D'Ivoire</option>

                                                <option value="Croatia">Croatia</option>

                                                <option value="Cuba">Cuba</option>

                                                <option value="Curaco">Curacao</option>

                                                <option value="Cyprus">Cyprus</option>

                                                <option value="Czech Republic">Czech Republic</option>

                                                <option value="Denmark">Denmark</option>

                                                <option value="Djibouti">Djibouti</option>

                                                <option value="Dominica">Dominica</option>

                                                <option value="Dominican Republic">Dominican Republic</option>

                                                <option value="East Timor">East Timor</option>

                                                <option value="Ecuador">Ecuador</option>

                                                <option value="Egypt">Egypt</option>

                                                <option value="El Salvador">El Salvador</option>

                                                <option value="Equatorial Guinea">Equatorial Guinea</option>

                                                <option value="Eritrea">Eritrea</option>

                                                <option value="Estonia">Estonia</option>

                                                <option value="Ethiopia">Ethiopia</option>

                                                <option value="Falkland Islands">Falkland Islands</option>

                                                <option value="Faroe Islands">Faroe Islands</option>

                                                <option value="Fiji">Fiji</option>

                                                <option value="Finland">Finland</option>

                                                <option value="France">France</option>

                                                <option value="French Guiana">French Guiana</option>

                                                <option value="French Polynesia">French Polynesia</option>

                                                <option value="French Southern Ter">French Southern Ter</option>

                                                <option value="Gabon">Gabon</option>

                                                <option value="Gambia">Gambia</option>

                                                <option value="Georgia">Georgia</option>

                                                <option value="Germany">Germany</option>

                                                <option value="Ghana">Ghana</option>

                                                <option value="Gibraltar">Gibraltar</option>

                                                <option value="Great Britain">Great Britain</option>

                                                <option value="Greece">Greece</option>

                                                <option value="Greenland">Greenland</option>

                                                <option value="Grenada">Grenada</option>

                                                <option value="Guadeloupe">Guadeloupe</option>

                                                <option value="Guam">Guam</option>

                                                <option value="Guatemala">Guatemala</option>

                                                <option value="Guinea">Guinea</option>

                                                <option value="Guyana">Guyana</option>

                                                <option value="Haiti">Haiti</option>

                                                <option value="Hawaii">Hawaii</option>

                                                <option value="Honduras">Honduras</option>

                                                <option value="Hong Kong">Hong Kong</option>

                                                <option value="Hungary">Hungary</option>

                                                <option value="Iceland">Iceland</option>

                                                <option value="India">India</option>

                                                <option value="Indonesia">Indonesia</option>

                                                <option value="Iran">Iran</option>

                                                <option value="Iraq">Iraq</option>

                                                <option value="Ireland">Ireland</option>

                                                <option value="Isle of Man">Isle of Man</option>

                                                <option value="Israel">Israel</option>

                                                <option value="Italy">Italy</option>

                                                <option value="Jamaica">Jamaica</option>

                                                <option value="Japan">Japan</option>

                                                <option value="Jordan">Jordan</option>

                                                <option value="Kazakhstan">Kazakhstan</option>

                                                <option value="Kenya">Kenya</option>

                                                <option value="Kiribati">Kiribati</option>

                                                <option value="Korea North">Korea North</option>

                                                <option value="Korea Sout">Korea South</option>

                                                <option value="Kuwait">Kuwait</option>

                                                <option value="Kyrgyzstan">Kyrgyzstan</option>

                                                <option value="Laos">Laos</option>

                                                <option value="Latvia">Latvia</option>

                                                <option value="Lebanon">Lebanon</option>

                                                <option value="Lesotho">Lesotho</option>

                                                <option value="Liberia">Liberia</option>

                                                <option value="Libya">Libya</option>

                                                <option value="Liechtenstein">Liechtenstein</option>

                                                <option value="Lithuania">Lithuania</option>

                                                <option value="Luxembourg">Luxembourg</option>

                                                <option value="Macau">Macau</option>

                                                <option value="Macedonia">Macedonia</option>

                                                <option value="Madagascar">Madagascar</option>

                                                <option value="Malaysia">Malaysia</option>

                                                <option value="Malawi">Malawi</option>

                                                <option value="Maldives">Maldives</option>

                                                <option value="Mali">Mali</option>

                                                <option value="Malta">Malta</option>

                                                <option value="Marshall Islands">Marshall Islands</option>

                                                <option value="Martinique">Martinique</option>

                                                <option value="Mauritania">Mauritania</option>

                                                <option value="Mauritius">Mauritius</option>

                                                <option value="Mayotte">Mayotte</option>

                                                <option value="Mexico">Mexico</option>

                                                <option value="Midway Islands">Midway Islands</option>

                                                <option value="Moldova">Moldova</option>

                                                <option value="Monaco">Monaco</option>

                                                <option value="Mongolia">Mongolia</option>

                                                <option value="Montserrat">Montserrat</option>

                                                <option value="Morocco">Morocco</option>

                                                <option value="Mozambique">Mozambique</option>

                                                <option value="Myanmar">Myanmar</option>

                                                <option value="Nambia">Nambia</option>

                                                <option value="Nauru">Nauru</option>

                                                <option value="Nepal">Nepal</option>

                                                <option value="Netherland Antilles">Netherland Antilles</option>

                                                <option value="Netherlands">Netherlands (Holland, Europe)</option>

                                                <option value="Nevis">Nevis</option>

                                                <option value="New Caledonia">New Caledonia</option>

                                                <option value="New Zealand">New Zealand</option>

                                                <option value="Nicaragua">Nicaragua</option>

                                                <option value="Niger">Niger</option>

                                                <option value="Nigeria">Nigeria</option>

                                                <option value="Niue">Niue</option>

                                                <option value="Norfolk Island">Norfolk Island</option>

                                                <option value="Norway">Norway</option>

                                                <option value="Oman">Oman</option>

                                                <option value="Pakistan">Pakistan</option>

                                                <option value="Palau Island">Palau Island</option>

                                                <option value="Palestine">Palestine</option>

                                                <option value="Panama">Panama</option>

                                                <option value="Papua New Guinea">Papua New Guinea</option>

                                                <option value="Paraguay">Paraguay</option>

                                                <option value="Peru">Peru</option>

                                                <option value="Phillipines">Philippines</option>

                                                <option value="Pitcairn Island">Pitcairn Island</option>

                                                <option value="Poland">Poland</option>

                                                <option value="Portugal">Portugal</option>

                                                <option value="Puerto Rico">Puerto Rico</option>

                                                <option value="Qatar">Qatar</option>

                                                <option value="Republic of Montenegro">Republic of Montenegro</option>

                                                <option value="Republic of Serbia">Republic of Serbia</option>

                                                <option value="Reunion">Reunion</option>

                                                <option value="Romania">Romania</option>

                                                <option value="Russia">Russia</option>

                                                <option value="Rwanda">Rwanda</option>

                                                <option value="St Barthelemy">St Barthelemy</option>

                                                <option value="St Eustatius">St Eustatius</option>

                                                <option value="St Helena">St Helena</option>

                                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>

                                                <option value="St Lucia">St Lucia</option>

                                                <option value="St Maarten">St Maarten</option>

                                                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>

                                                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>

                                                <option value="Saipan">Saipan</option>

                                                <option value="Samoa">Samoa</option>

                                                <option value="Samoa American">Samoa American</option>

                                                <option value="San Marino">San Marino</option>

                                                <option value="Sao Tome & Principe">Sao Tome &amp; Principe</option>

                                                <option value="Saudi Arabia">Saudi Arabia</option>

                                                <option value="Senegal">Senegal</option>

                                                <option value="Seychelles">Seychelles</option>

                                                <option value="Sierra Leone">Sierra Leone</option>

                                                <option value="Singapore">Singapore</option>

                                                <option value="Slovakia">Slovakia</option>

                                                <option value="Slovenia">Slovenia</option>

                                                <option value="Solomon Islands">Solomon Islands</option>

                                                <option value="Somalia">Somalia</option>

                                                <option value="South Africa">South Africa</option>

                                                <option value="Spain">Spain</option>

                                                <option value="Sri Lanka">Sri Lanka</option>

                                                <option value="Sudan">Sudan</option>

                                                <option value="Suriname">Suriname</option>

                                                <option value="Swaziland">Swaziland</option>

                                                <option value="Sweden">Sweden</option>

                                                <option value="Switzerland">Switzerland</option>

                                                <option value="Syria">Syria</option>

                                                <option value="Tahiti">Tahiti</option>

                                                <option value="Taiwan">Taiwan</option>

                                                <option value="Tajikistan">Tajikistan</option>

                                                <option value="Tanzania">Tanzania</option>

                                                <option value="Thailand">Thailand</option>

                                                <option value="Togo">Togo</option>

                                                <option value="Tokelau">Tokelau</option>

                                                <option value="Tonga">Tonga</option>

                                                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>

                                                <option value="Tunisia">Tunisia</option>

                                                <option value="Turkey">Turkey</option>

                                                <option value="Turkmenistan">Turkmenistan</option>

                                                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>

                                                <option value="Tuvalu">Tuvalu</option>

                                                <option value="Uganda">Uganda</option>

                                                <option value="Ukraine">Ukraine</option>

                                                <option value="United Arab Erimates">United Arab Emirates</option>

                                                <option value="United Kingdom">United Kingdom</option>

                                                <option value="United States of America">United States of America</option>

                                                <option value="Uraguay">Uruguay</option>

                                                <option value="Uzbekistan">Uzbekistan</option>

                                                <option value="Vanuatu">Vanuatu</option>

                                                <option value="Vatican City State">Vatican City State</option>

                                                <option value="Venezuela">Venezuela</option>

                                                <option value="Vietnam">Vietnam</option>

                                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>

                                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>

                                                <option value="Wake Island">Wake Island</option>

                                                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>

                                                <option value="Yemen">Yemen</option>

                                                <option value="Zaire">Zaire</option>

                                                <option value="Zambia">Zambia</option>

                                                <option value="Zimbabwe">Zimbabwe</option>

                                            </select>

                                        </td>

                                    </tr>

                                    <tr>

                                              <td><h3>Next of Kin's Comments</h3></td>

                                    </tr>

                                    <tr>

                                              <td class="column1a" colspan="2">

                                                  <textarea name="comments[]" id="k_comments_<?php print $i; ?>" onkeyup="adjustHeight(this)" style="width:100%" ></textarea>

                                        </td>

                                    </tr>

                                    <tr>

                                              <td colspan="2"><hr /></td>

                                    </tr>

                                    <?php } ?>

                                </table>

                                <input class="floatRight" name="submit" type="submit" value="NEXT" />

                            </form>

                            <div class="clearRight"></div>

                        </div>

                    </div>