<form class="studParent">
 			<table class="table table-bordered">
			 <tbody><tr>
			    <td><label>Father's Name:<b style="color:red;font-size:16px;">*</b></label> </td>
			    <td colspan="3">
			    	<input name="fatherFirstName" id="studParentfirstname" onblur="showMandatoryFildsforFather()" placeholder="First Name" type="text">
			    	<input name="fatherMiddleName" id="studParentmiddlename" placeholder="Middle Name" type="text">
			    	<input name="fatherLastName" id="studParentlastname" placeholder="Last Name" type="text">
			    </td>
			</tr>
			<tr>
			    <td><label>Mother's Name:<b style="color:red;font-size:16px;">*</b></label> </td>
			    <td colspan="3">
			    	<input name="motherFirstName" id="studmotherfirstname" onblur="showMandatoryFildsforMother()" placeholder="First Name" type="text">
			    	<input name="motherMiddleName" id="studmothermiddlename" placeholder="Middle Name" type="text">
		    		<input name="motherLastName" id="studmotherlastname" placeholder="Last Name" type="text">
		    	</td>
			</tr>
			 <tr>
			<td colspan="2" style="text-align: center"><label>Father Details</label></td>
			<td colspan="2" style="text-align: center"><label>Mother Details </label></td>
			</tr>	
			<tr>
				<td><label>Email:</label></td>
			    <td><input name="fatherAlternetEmailID" id="studFatherEmail" type="text"></td>
			   	<td><label>Email:</label></td>
		        <td><input name="motherAlternetEmailID" id="studMotherEmail" type="text"></td>
		  	</tr>
					
			  <tr>  
			  	
			    <td><label>Mobile No: <span id="fatherMobNo"></span> </label></td>
			    <td><input name="fatherMobileNo" id="studFatherno" maxlength="14" type="text"></td>
			     <td><label>Mobile No:<span id="motherMobNo"></span> </label></td>
			     <td><input name="motherMobileNo" id="studmotherMobile" maxlength="14" type="text"></td>
			  </tr>
			    
			  <tr>
				 <td><label>Occupation: <span id="fatheroccupationId"></span></label></td>
				 <td><input name="fatherProfession" id="studParentprofession" type="text"></td>
			   	 <td><label>Occupation:<span id="motheroccupationId"></span></label></td>
		         <td><input name="motherProfession" id="studMotherProfession" type="text"></td>
		         
		     </tr>
				   <tr>
				 <td><label>Organization:</label></td>
				 <td><input id="fatherOrganization" type="text"></td>
			   	 <td><label>Organization:</label></td>
		         <td><input id="motherOrganization" type="text"></td>
		         
		     </tr>
		     
		      <tr>
				 <td><label>Designation:</label></td>
				 <td><input id="fatherDesignation" type="text"></td>
			   	 <td><label>Designation:</label></td>
		         <td><input id="motherDesignation" type="text"></td>
		         
		     </tr>      
	  		
		      <tr>
				<td><label>Office Address:</label></td>
			    <td><textarea id="txtFatherOfficeAddress"></textarea></td>    
		      	<td><label>Office Address:</label></td>
		        <td><textarea id="txtMotherOfficeAddress"></textarea></td>
			</tr>
		     <tr>
		     	  <td><label>Annual Income: <span id="fatherIncomeId"></span></label></td>
			     <td><input name="parentAnnualIncome" id="studparentannulaincome" maxlength="15" class="validnum" type="text"></td>  
			     <td><label>Annual Income:<span id="motherIncomeId"></span></label></td>
			     <td><input name="motherAnnualIncome" id="motherannulaincome" maxlength="15" class="validnum" type="text"></td>   
		      	 
			 </tr>
				<!-- <tr>
	  			<td><label>Phone Number:</label></td>
			    <td><input type="text" name="parentStd" id="studeparentstdcode" style="width:40px;" maxLength="6"/>
			    <input type="text" name="parentPhoneNo" id="parentstudphnumber" maxLength="11" /></td>
				 <td><label>Fax:</label></td>
			     <td><input type="text" name="parentFaxStd" id="parentfaxstdcode" style="width:40px;" maxLength="6"/>
			     <input type="text" name="parentFax" id="applstudparentfaxno"  maxLength="11"/></td>
			   
			</tr> -->
			<tr>
				<td><label>Office Phone No:</label></td>
				<td><input name="parentStd" id="studeparentstdcode" style="width:40px;" maxlength="6" class="validnum" type="text">&nbsp;
				<input name="parentPhoneNo" id="parentstudphnumber" maxlength="11" type="text"></td>

				<td><label>Office Phone No:</label></td>
				<td><input id="motherstdcode" style="width:40px;" maxlength="6" type="text">&nbsp;
				<input id="motherphnumber" maxlength="11" class="validnum" type="text"></td>

			</tr>
	
			<tr>
				<td><label>Residence Phone No:<b style="color:red;font-size:16px;">*</b></label></td>
				<td><input id="fatherHomestd" style="width:40px;" maxlength="6" type="text">
				<input id="fatherStudPhnumber" maxlength="11" class="validnum" type="text"></td>

				<td><label>Residence Phone No:</label></td>
				<td><input id="motherHomestdcode" style="width:40px;" maxlength="6" type="text">
				<input id="motherHomePhnumber" maxlength="11" class="validnum" type="text"></td>
			</tr>
			  <tr>
		     	 <td><label>Residence Address:<b style="color:red;font-size:16px;">*</b></label></td>
		         <td><textarea name="parentAddress" id="parentAddressResi"></textarea></td> 
		      	  <td><label>Fax:</label></td>
			     <td><input name="parentFaxStd" id="parentfaxstdcode" style="width:40px;" maxlength="6" type="text">
			     <input name="parentFax" id="applstudparentfaxno" maxlength="11" type="text"></td>
			 </tr>
		       <tr>
		 	       <td><label>District:</label></td>
		     	   <td><input name="parentDistrict" id="studparentdistrict" type="text"></td>
				   <td><label>Taluka:</label></td>
				   <td><input name="parentTaluka" id="studParenttaluka" type="text"></td>        
				   
				</tr>
		       
		        <tr>
			          <td><label>Village:</label></td>
			   	      <td><input name="parentVillage" id="studParentvillage" type="text"></td>
			   	      <td><label>State:</label></td>
		     	   <td><input name="fatherState" id="txtFatherState" type="text"></td>
				</tr>
   				 <tr>
		          <td><label>Pincode:</label></td>
			   	<td colspan="3"><input name="parentPinCode" id="studparentpincode" maxlength="7" type="text"></td>
		     	  <!--  <td ><label>State:</label></td>
		     	   <td><input type="text" name="motherState" id="txtMotherState" /></td> -->
		        
		        </tr>
		        
			 
		
				<tr>
			        <td colspan="4" style="text-align:center;">
						<input class="btn btn-inverse btn-mini" value="Save" onclick="addStudentParentDetails()" type="Button">
						<input id="uploadStudParentDoc" class="btn btn-inverse btn-mini" value="Upload Document(s)" type="Button">
					</td>
 				</tr>
			 	</tbody></table>		
			 			
	</form>