<?php
?>
<div class="container" style="border: 0 none;"> <!-- wrapper -->
<div class="row-fluid" style="border: 10px solid #e5e5e5;border-radius: 10px; padding: 0px 10px 20px 35px;"">
	<div class="alert alert-error" id="div-overlay-alert-msg"></div><!-- end div-overlay-alert-msg -->
    <div id="div-alert-success" class="alert alert-success"></div>

    <div class="container"> <!-- payment content -->
    	<div>
		<div class="row"> <!-- 1 -->
			<div class="payment-form-header"><h2 style="letter-spacing: 30px;">PAYMENT FORM</h2></div>
		</div><!-- END row 1 -->
    	<div class="row"><!-- 2 -->
    		<div class="span12">
    			<ul class="pull-right">
	                <span id="p-span-date" title='(Month/Date/Year)' class="label label-info" data-placement="bottom" data-toggle="tooltip">05/18/2013</span>&nbsp;
	                <span id="p-span-time" class="label label-info">10:37:53</span>
            	</ul>
    			<div class="input-prepend input-append">
                    <span class="add-on"><i class="icon-search"></i></span>
	                <input class="span3" type="text" id='p_student_search' placeholder="Enter student ID No.">
	                <button class="btn" id='btn_p_search_stud' type="button">Go!</button>
            	</div>
    		</div>
    	</div><!-- END row 2-->
    	<div class="row"><!-- row 3 -->
            <h5>Student Information</h5>
    		<div id="div_for_show_records" class="form-horizontal span6">
    			<fieldset>
    				<div class="control-group">
	    				<label class="control-label" style="text-align: start;">STUDENT ID</label>
	    				<div class="controls">
	    					<input type="text" id='student_id' class="line" readonly='readonly'/>
	                    	<input type='hidden' id='p_transactionNo'/>
	    				</div>
    				</div>
    				<div class="control-group">
    					 <label class="control-label" style="text-align: start;">STUDENT NAME</label>
    					 <div class="controls">
    					 	<input type="text" id='student_name' class="line" readonly='readonly'/>
    					 </div>
    				</div>
    			</fieldset>
            </div>
            <div class="form-horizontal span5">
            	<fieldset>
    				<div class="control-group">
    					<label class="control-label" style="text-align: start;">ENROLLMENT NO</label>
    					<div class="controls">
    						<input type="text" id='enrollment_no' class="line minus-width" readonly='readonly'/>
    					</div>
    				</div>
    				<div class="control-group">
    					<label class="control-label" style="text-align: start;">GRADE | YEAR LEVEL</label>
    					<div class="controls">
    						<input type="text" id='grade_year_level' class='line minus-width' readonly='readonly'/>
    					</div>
    				</div>
    			</fieldset>
            </div>
    	</div><!--END row 3 -->
    	<div class="row"><!-- row 4 -->
    		<div class="span12">
    			<fieldset>
    				<legend><h5>Your assessment</h5></legend>
    				<small>ASSESSMENT NO.     </small><span id="assessment_no" class="label label-info"></span>
    				<small>MODE OF PAYMENT     </small><span id="mode_of_payment" class="label label-info"></span>
                    <br><br>
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

            			</tbody>
        			</table><!-- END tbl_for_assessment -->
    			</fieldset>

    		</div>
    	</div><!-- END row 4 -->
        <div class="row"> <!-- row 5 -->
            <div class="span6" style="text-align: center;">
                <label>TOTAL AMOUNT</label>
                <input type="text" id="t_amount_ass" class="line" readonly="readonly"/>
                <label>TOTAL CURRENT PAYMENT</label>
                <input type="text" id="t_current_pymnt" class="line" readonly="readonly"/>
            </div>
            <div class="span6" style="text-align: center;">
                <label>AMOUNT TENDER</label>
                <input type="text" id="amount_ten" class="payment_2"/>
                <label>CHANGE</label>
                <input type="text" id="change" class="line" readonly="readonly"/>
            </div>
        </div><!-- END row 5 -->
        <div class="row"><!-- row 6 -->
            <br>
            <div class="span12" style="text-align: center;">
                <button id="btn_ass_payment_done" class="btn btn-large btn-primary">DONE</button>
                <button id="btn_ass_payment_cancel" class="btn btn-large btn-default">CANCEL</button>
                <button id="btn_new_AS" class="btn btn-large btn-success">NEW</button>
            </div>
        </div><!-- END row 6  -->

    	</div>
	</div>
	<!-- END payment content -->

</div>
<!-- END row-fluid -->
</div>
<!-- END wrapper -->