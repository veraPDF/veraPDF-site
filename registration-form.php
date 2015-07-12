<?php
/**
 * Template Name: Registration Form
 *
 * The registration form for our theme.
 *
 * @package Verapdf
 */
get_header(); ?>
<!-- Begin MailChimp Signup Form -->
<div id="mailchimp">
  <div class="row">
    <div class="col-md-12">
      <h2>Subscribe to the veraPDF newsletter</h2>
    </div>
  </div>
  <div class="row">
    <div class="indicates-required col-sm-2 text-right">Required fields <i class="fa fa-asterisk"></i></div>
  </div>
  <div class="row">
    <form action="//openpreservation.us2.list-manage.com/subscribe/post?u=c2ba434b13896e6e89790a724&amp;id=64ff32b55b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="form-horizontal validate" target="_blank" novalidate>
      <div class="mc-field-group form-group">
      	<label for="mce-EMAIL" class="col-sm-2 control-label">Email Address <i class="fa fa-asterisk"></i></label>
        <div class="col-sm-8">
          <input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL" placeholder="name@example.com">
        </div>
      </div>
      <div class="mc-field-group form-group">
      	<label for="mce-FNAME" class="col-sm-2 control-label">First Name </label>
        <div class="col-sm-8">
      	   <input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME" placeholder="What your friends call you">
         </div>
      </div>
      <div class="mc-field-group form-group">
      	<label for="mce-LNAME" class="col-sm-2 control-label">Last Name </label>
        <div class="col-sm-8">
      	   <input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME" placeholder="What your teachers called you">
         </div>
      </div>
      <div class="mc-field-group form-group">
      	<label for="mce-MMERGE3" class="col-sm-2 control-label">Job Role  <i class="fa fa-asterisk"></i></label>
        <div class="col-sm-8">
        	<input type="text" value="" name="MMERGE3" class="form-control required" id="mce-MMERGE3" placeholder="What you do">
        </div>
      </div>
      <div class="mc-field-group form-group">
      	<label for="mce-MMERGE4" class="col-sm-2 control-label">Organisation  <i class="fa fa-asterisk"></i></label>
        <div class="col-sm-8">
      	   <input type="text" value="" name="MMERGE4" class="form-control required" id="mce-MMERGE4" placeholder="Who you do it for">
        </div>
      </div>
      <div class="mc-field-group form-group">
      	<label for="mce-MMERGE5" class="col-sm-2 control-label">Country  <i class="fa fa-asterisk"></i></label>
        <div class="col-sm-8">
      	   <input type="text" value="" name="MMERGE5" class="form-control required" id="mce-MMERGE5" placeholder="Where you do it">
        </div>
      </div>
      <div class="mc-field-group form-group">
        <fieldset>
          <label class="col-sm-2 control-label">Email Format </label>
          <div class="col-sm-8">
            <label for="mce-EMAILTYPE-0" class="radio-inline"><input type="radio" value="html" name="EMAILTYPE" id="mce-EMAILTYPE-0" checked> HTML</label>
            <label for="mce-EMAILTYPE-1" class="radio-inline"><input type="radio" value="text" name="EMAILTYPE" id="mce-EMAILTYPE-1"> Text</label>
          </div>
        </fieldset>
      </div>
    	<div id="mce-responses" class="clear">
    		<div class="response" id="mce-error-response" style="display:none"></div>
    		<div class="response" id="mce-success-response" style="display:none"></div>
    	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;"><input type="text" name="b_c2ba434b13896e6e89790a724_64ff32b55b" tabindex="-1" value=""></div>
      <div class="clear text-center"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-lg btn-primary"></div>
    </form>
  </div>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='text';fnames[4]='MMERGE4';ftypes[4]='text';fnames[5]='MMERGE5';ftypes[5]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
<?php get_footer(); ?>
