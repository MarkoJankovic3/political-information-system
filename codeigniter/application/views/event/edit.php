<div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Profile</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="wrapper">
                            <div class="row no-gutters">
                                <div class="col-md-6 d-flex align-items-stretch card special-card">
                                    <div class="contact-wrap w-100 p-md-5 p-4 py-5">
                                        <h3 class="mb-4 text-primary">Edit event</h3>
                                        <div id="form-message-warning" class="mb-4"></div>
                                        <?php echo validation_errors(); ?>

                                        <?php echo form_open('event/editEvent/'.$event['eventid']); ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo $event['name']?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="date" class="form-control" name="date" placeholder="Select Date" value="<?php echo $event['date']?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="location" placeholder="Enter the location" value="<?php echo $event['location']?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block" name="submit">Save changes</button>
                                                </div>
                                            </div>

                                            <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>