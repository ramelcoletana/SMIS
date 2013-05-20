<?php
?>
<div class="container" style="border: 1px solid #000;"> <!-- wrapper -->
<div class="row-fluid">
    <div class="row ">
            <div class="span3">
                <div class="tabbable tabs-left" style="">
                    <ul class="nav nav-tabs" style="width: 100%;">
                        <li class="active">
                            <a data-toggle="tab" href="profile"><i class="icon-home"></i></a>
                        </li>
                        <li><a data-toggle="tab" href="#account">Account</a></li>
                    </ul>
                </div>
            </div>
            <div class="span9">
                <div class="tab-content">
                    <div id="profile" class="tab-pane active"><!-- profile content -->
                        <div class="profile_img_holder">
                            <img src="../images/avatar.gif" id="user_profile_img" >
                        </div>

                        <div class="page_title">
                            <h3 id="h_name">erer</h3>
                            <small id="h_email">dfdf</small>
                            <div class="pull-right">
                                <a href="../process/logout.php" data-method="delete">
                                    <small><i class="icon-signout"></i>Logout</small>
                                </a>
                            </div>
                        </div>
                        <small class="btn btn-mini" id="btn-change-pic">Change Picture</small>
                        <hr style="border: 1px 0; border-color: #e5e5e5;">
                        <form class="form_edit form-horizontal" id="form_user_profile">
                            <div class="row">
                                <div class="span7">
                                    <div class="control-group">
                                        <label class="control-label">Name</label>
                                        <div class="controls">
                                            <input type="text" name="edit_name" id="edit_name" size="30" class="input-xlarge" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Email</label>
                                        <div class="controls">
                                            <input type="email" name="edit_email" id="edit_email" size="30" class="input-xlarge" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Gender</label>
                                        <div class="controls">
                                            <select id="edit_gender" name="edit_gender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Birth Date</label>
                                        <div class="controls">
                                            <input type="text" name="edit_b_date" id="edit_b_date" class="input-xlarge" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Age</label>
                                        <div class="controls">
                                            <input type="text" name="edit_age" id="edit_age" class="input-xlarge" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button class="btn btn-primary" name="save_edited_profile" id="save_changes_user_profile">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!-- END profile content -->
                    <div id="account" class="tab-pane"><!-- account content -->
                        <h3>Private Area</h3>
                        <fieldset>
                            <legend>Password</legend>
                            <form class='form-horizontal'>
                                <div class='row'>
                                    <div class="span7">
                                        <div class="control-group">
                                            <label class="control-label">Current Password</label>
                                            <div class="controls">
                                                <input type="password" name="current_password" id="current_password" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">New Password</label>
                                            <div class="controls">
                                                <input type="password" name="new_password" id="new_password">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label text-error">Confirm password</label>
                                            <div class="controls">
                                                <input type="password" name="confirm_password" id="confirm_password">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <input type="submit" name="save_password" id="save_password" value="Save password" class="btn btn-primary" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </fieldset>

                        <fieldset>
                            <legend>Username</legend>
                            <form class='form-horizontal'>
                                <div class='row'>
                                    <div class="span7">
                                        <div class="control-group">
                                            <label class="control-label">Current Username</label>
                                            <div class="controls">
                                                <input type="text" name="current_password" id="current_password" required>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <div class="controls">
                                                <input type="submit" name="save_username" id="save_username" value="Save username" class="btn btn-primary" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </fieldset>

                    </div><!-- END account content -->
                </div>

            </div>
    </div>
</div>
<!-- END row-fluid -->
</div>
<!-- END wrapper -->