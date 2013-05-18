<?php
?>
<div class="container" style="border: 1px solid #000000;"> <!-- wrapper -->
<div class="row-fluid" style="border: 1px solid #000000;">
	<div class="alert alert-error" id="div-overlay-alert-msg"></div><!-- end div-overlay-alert-msg -->
    <div id="div-alert-success" class="alert alert-success"></div>

    <div class="container"> <!-- payment content -->
    	<div style="border: 1px solid #e5e5e5; padding: 20px 20px 20px 35px;">
		<div class="row"> <!-- 1 -->
			<h2>PAYMENT FORM</h2>
		</div><!-- END row 1 -->
    	<div class="row"><!-- 2 -->
    		<div class="span12">
    			<ul class="pull-right">
	                <span id="p-span-date" title='(Month/Date/Year)' class="label label-info" data-placement="bottom" data-toggle="tooltip">05/18/2013</span>&nbsp;
	                <span id="p-span-time" class="label label-info">10:37:53</span>
            	</ul>
    			<div class="input-append">
	                <input class="span3" type="text" id='p_student_search' placeholder="Enter student ID No.">
	                <button class="btn" id='btn_p_search_stud' type="button">Go!</button>
            	</div>
    		</div>
    	</div><!-- END row 2-->
    	<div class="row"><!-- row 3 -->
    		<div id="div_for_show_records" class="form-horizontal span6">
    			<fieldset>
    				<div class="control-group">
	    				<label class="control-label">STUDENT ID</label>
	    				<div class="controls">
	    					<input type="text" id='student_id' class="line" readonly='readonly'/>
	                    	<input type='hidden' id='p_transactionNo'/>
	    				</div>
    				</div>
    				<div class="control-group">
    					 <label class="control-label">STUDENT NAME</label>
    					 <div class="controls">
    					 	<input type="text" id='student_name' class="line" readonly='readonly'/>
    					 </div>
    				</div>
    			</fieldset>
            </div>
            <div class="form-horizontal span6">
            	<fieldset>
    				<div class="control-group">
    					<label class="control-label">ENROLLMENT NO</label>
    					<div class="controls">
    						<input type="text" id='enrollment_no' class="line" readonly='readonly'/>
    					</div>
    				</div>
    				<div class="control-group">
    					<label class="control-label">GRADE | YEAR LEVEL</label>
    					<div class="controls">
    						<input type="text" id='grade_year_level' class='line' readonly='readonly'/>
    					</div>
    				</div>
    			</fieldset>
            </div>
    	</div><!--END row 3 -->
    	<div class="row"><!-- row 4 -->
    		<div class="span12">
    			<fieldset>
    				<legend>Your assessment</legend>
    				<strong>ASSESSMENT NO. :</strong><span id="assessment_no" class="label label-info">33</span>
    				<strong>MODE OF PAYMENT :</strong><span id="mode_of_payment" class="label label-info">Monthly</span>
    				<table id='tbl_for_assessment' class="table">
            			<thead>
			                <tr id="des">
			                    <th id="desc">DESCRIPTION</th>
			                    <th id="assess">ASSESSMENT AMOUNT</th>
			                    <th id="assbal">ASSESSMENT BAL.</th>
			                    <th id="payhere">PAYMENT HERE</th>
			                    <th id="advance">ADVANCE PYMNT.</th>
			                </tr>
            			</thead>
            			<tbody id="tbody_for_tbl_assessment">
            				<tr>
            					<td>Entrance</td>
            					<td>200</td>
            					<td>200</td>
            					<td><input type="text" ></td>
            					<td>0</td>
            				</tr>
            				<tr>
            					<td>Entrance</td>
            					<td>200</td>
            					<td>200</td>
            					<td><input type="text" ></td>
            					<td>0</td>
            				</tr>
            				<tr>
            					<td>Entrance</td>
            					<td>200</td>
            					<td>200</td>
            					<td><input type="text" ></td>
            					<td>0</td>
            				</tr>
            			</tbody>
        			</table><!-- END tbl_for_assessment -->
    			</fieldset>
    			<div class="span6">
dfdfdf
    			</div>
    			<div  class="span6">
dfdfd
    			</div>
    	</div><!-- END row 4 -->
    	</div>
	</div>
	<!-- END payment content -->

</div>
<!-- END row-fluid -->
</div>
<!-- END wrapper -->