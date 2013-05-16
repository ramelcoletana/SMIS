<?php
?>
<div class="container"><!-- wrapper -->
<div class="row-fluid">
<div class="thumbnail">
    <div class="alert alert-error" id="div-overlay-alert-msg"></div><!-- end div-overlay-alert-msg -->
    <div id="div-alert-success" class="alert alert-success"></div>
    <div id='div-search' class="form-search">
        <input type='text' name='searchStudId' id='searchStudId' class="input-medium" placeholder="ENTER STUDENT ID HERE" required>
        <button id='btn-search-stud' class='btn btn- medium btn-primary'>Search</button>
    </div>
    <br>

    <div class="container">
        <div class="span4" style="border: 1px solid #e5e5e5;"> <!-- student profile_pic -->
            <div id='div-for-pic'>
                <div class="div-image"></div><!-- end div-image -->
                <span id = "label_change_pic">&nbsp;&nbsp;<i class="icon-pencil"></i>&nbsp;&nbsp;Change Picture</span>
            </div><!-- end div-for-pic -->
        </div>
        <!-- END student profile_pic -->

        <div class="span8 form-horizontal" style="border: 1px solid #e5e5e5;"> <!-- student name -->
            <h3>Personal</h3>
            <div class="control-group">
                <label class="control-label">STUDENT ID NO</label>
                <div class="controls">
                    <span class='label label-info' id='studentId'>100000</span>
                    <input type='hidden' id='currentGYL' />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">FULL NAME</label>
                <div class="controls">
                    <span class='label label-info' id='studentName'>Ramel Relampagos Coletana</span>
                </div>
            </div>
        </div>
        <!-- END student name -->

        <div class="span6">

        </div>

        <div class="span6">

        </div>
    </div>

</div>
<!-- END thumbnail -->
</div>
<!-- END row-fluid -->
</div>
<!-- END wrapper -->