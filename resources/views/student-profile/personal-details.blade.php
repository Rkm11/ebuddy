<form class="studPerDetails" id="contact-form">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th colspan="4" style="color: #0088CC"><label><b><font>Student Personal Details:</font></b></label></th>
                                    </tr>
                                    <tr>
                                        <td>Full Name: <b style="color:red;font-size:16px;">*</b></td>
                                        <td colspan="4">
                                            <input type="text" name="firstName" id="txtfirstName" value="{{$user_details->first_name}}" placeholder="First name" disabled="disabled">
                                            <input type="text" name="middleName" id="txtmiddleName" value="{{$user_details->middle_name}}" placeholder="Middle name">
                                            <input type="text" name="lastName" id="txtLastName" value="{{$user_details->last_name}}" placeholder="Last name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <!-- Photo Upload TD -->
                                        <td rowspan="3" colspan="2" id="img">
                                            <div class="thumbnail" id="studentProfileImage" style="height:120px;width:120px;margin-left: 50px;">
                                                <img src="getStudentProfileImage.json?id=1&amp;type=profile" alt="Photo" id="studentProfilePhoto"  width="120" height="120" align="right" style="background-color: #FFFFFF">
                                            </div>
                                        </td>

                                        <!-- Photo Upload TD End -->
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">Email:</label></td>
                                        <td colspan="2">
                                            <input type="text" name="alternetEmailID" id="txtAlternetEmailID" value="{{$user->email}}" readonly="">
                                        </td>
                                    </tr>	   
                                    <tr>
                                        <td><label>Mother's Name: <b style="color:red;font-size:16px;">*</b></label></td>
                                        <td colspan="2">
                                            <input type="text" name="motherName" value="{{$user_details->mother_name}}" id="applstudmotherName">
                                        </td>   
                                    </tr> 
                                    <tr>
                                        <td><label class="control-label">Gender : <b style="color:red;font-size:16px;">*</b></label></td>
                                        <td align="left">
                                            <input type="radio" name="Gender" id="male" value="Male" @if($user_details->gender=='Male')checked="checked"@endif disabled="disabled"><label style="display:inline;">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="Gender" value="Female" @if($user_details->gender=='Female')checked="checked"@endif id="female" disabled="disabled"><label style="display:inline;">Female</label>
                                        </td>
                                        <td><label class="control-label">Date of Birth : <b style="color:red;font-size:16px;">*</b></label></td>
                                        <td colspan="2"><input type="text" id="txtdob" name="dob" readonly="readonly" class="hasDatepicker" disabled="disabled"></td>
                                    </tr>
                                    <tr>  	
                                        <td><label class="control-label">Hobbies:</label></td>
                                        <td><input type="text" id="txtHobbies" name="Hobbies" value="{{$user_details->hobbies}}" class="validate[required,custom[onlyLetter]] text-input"></td>

                                        <td><label class="control-label">Blood group :  <b style="color:red;font-size:16px;">*</b></label></td>
                                        <td><select name="selstudbloodgrp" id="studbloodgrp">
                                                <option value="">Select</option>
                                                <option @if($user_details->blood_group=="A+") selected="" @endif value="A+">A+</option>
                                                <option @if($user_details->blood_group=="A-") selected="" @endif value="A-">A-</option>
                                                <option @if($user_details->blood_group=="B+") selected="" @endif value="B+">B+</option>
                                                <option @if($user_details->blood_group=="B-") selected="" @endif value="B-">B-</option>
                                                <option @if($user_details->blood_group=="AB+") selected="" @endif value="AB+">AB+</option>
                                                <option @if($user_details->blood_group=="AB-") selected="" @endif value="AB-">AB-</option>
                                                <option @if($user_details->blood_group=="O+") selected="" @endif value="O+">O+</option>
                                                <option @if($user_details->blood_group=="O-") selected="" @endif value="O-">O-</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">Mobile No.: <b style="color:red;font-size:16px;">*</b></label></td>
                                        <td><input type="text" name="mobileNo" id="txtmobileNo" maxlength="10" value="{{$user_details->mobile_no}}"></td>
                                        <td class="body"><label class="control-label">Alternate Phone No.:</label></td>
                                        <td align="left">
                                            <input name="alternetContactNumber" type="text" id="txtAltNumber" value="{{$user_details->alternate_no}}" maxlength="10" style="width:100px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">Religion : <b style="color:red;font-size:16px;">*</b></label></td>
                                        <td>
                                            <input name="txtReligion" type="text" id="txtReligion" value="{{$user_details->religion}}" style="width:100px;">
                                            <!--<select name="studreligion" id="txtstudreligion" disabled="disabled"><option value="0">Select</option><option value="5">Buddhism</option><option value="3">Christianity</option><option value="1">Hinduism</option><option value="2">Islam</option><option value="6">Jainism</option><option value="4">Sikhism</option><option value="7">Zoroastrianism </option></select>-->
                                        </td>
                                        <td><label class="control-label">Category :<b style="color:red;font-size:16px;">*</b></label></td>
                                        <td>
                                            <input name="txtCategory" type="text" id="txtCategory" value="{{$user_details->category}}" style="width:100px;">
                                            <!--<select name="studcategory" id="txtstudcategory" disabled="disabled"><option value="0">Select</option><option value="35">OBC</option><option value="34">NT (D)</option><option value="33">NT (C)</option><option value="32">NT (B)</option><option value="31">DT (A)</option><option value="30">ST</option><option value="29">SC</option><option value="28">Open</option><option value="12">SBC</option></select>-->
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><label>Physically Challenged(Handicapped)<b style="color:red;font-size:16px;">*</b> </label></td>
                                        <td colspan="4">
                                            <input type="radio" name="physicallyHandicapped" id="phYes" value="Yes"><label style="display:inline;">Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="physicallyHandicapped" value="No" id="phNo" checked="checked"><label style="display:inline;">No</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Sports ? </label></td>
                                        <td colspan="4">
                                            <input type="radio" name="radioSports" value="State" id="state"><label style="display:inline;">State</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="radioSports" id="national" value="National"><label style="display:inline;">National</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="radioSports" value="International" id="international"><label style="display:inline;">International</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="radioSports" value="Not Applicable" id="naSports" checked="checked"><label style="display:inline;">Not Applicable</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">Roll No :</label></td>
                                        <td id="txtRollNo">358</td>
                                        <td><label class="control-label">Admission Date :</label></td>
                                        <td id="txtAdmissionDate">Aug 12,2014</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label">Vehicle No :</label></td>
                                        <td colspan="4"><input type="text" name="vehicleNo" id="txtVehicleNo"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div align="center" style="margin-left:400px">
                                                <button type="button" class="btn btn-inverse btn-mini  " onclick="addStudentPersonalDetails()">Save</button>
                                                <!-- <button type="reset" class="btn btn-inverse btn-mini  ">Cancel</button> -->
                                            </div>
                                        </td>
                                    </tr>
                                </tbody></table>
                        </form>