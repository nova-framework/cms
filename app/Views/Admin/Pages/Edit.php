<section class="content-header">
    <h1>Edit Page</h1>
    <ol class="breadcrumb">
        <li><a href='<?= site_url('admin/dashboard'); ?>'><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href='<?= site_url('admin/pages'); ?>'><i class="fa fa-book"></i> Pages</a></li>
        <li>Edit Page</li>
    </ol>
</section>	

<section class='content'>

<div class="box box-primary">
    <div class="box-body">

		<form action='<?=site_url('admin/pages/'.$page->id);?>' method='post'>
		<input type='hidden' name='csrfToken' value='<?=$csrfToken;?>'>

		<?=Session::getMessages();?>

		<div class='row'>

			<div class='col-md-6'>

				<div class="control-group">
				    <label class="control-label" for='browserTitle'> Browser Title</label>
				    <input class="form-control" id='browserTitle' type="text" name="browserTitle" value="<?=Input::old('browserTitle', $page->browserTitle);?>" />
				</div>

				<div class="control-group">
				    <label class="control-label" for='pageTitle'> Page Title</label>
				    <input class="form-control" id='pageTitle' type="text" name="pageTitle" value="<?=Input::old('pageTitle', $page->pageTitle);?>" />
				</div>	

				<div class="control-group">
				    <label class="control-label" for='active'> Active</label>
				    <select name='active' id='active' class='form-control'>
				    <?php
				    $options = ['Yes', 'No'];
				    foreach ($options as $option) {
				    	if (Input::old('active', $page->active) == $option) {
				    		$sel = 'selected=selected';
				    	} else {
				    		$sel = null;
				    	}
				    	echo "<option value='$option' $sel>$option</option>";
				    }
				    ?>
				    </select>
				</div>

			</div>

			<div class='col-md-6'>

				<div class="control-group">
				    <label class="control-label" for='publishedDate'> Published Date</label>
				    <input class="form-control" id='publishedDate' type="text" name="publishedDate" value="<?=Input::old('publishedDate', $page->publishedDate);?>" />
				</div>

				<div class="control-group">
				    <label class="control-label" for='layout'> Layout File</label>
				    <select name='layout' id='layout' class='form-control'>
				    <?php
				    foreach ($layouts as $option) {
				    	if (Input::old('layout', $page->layout) == $option) {
				    		$sel = 'selected=selected';
				    	} else {
				    		$sel = null;
				    	}
				    	echo "<option value='$option' $sel>$option</option>";
				    }
				    ?>
				    </select>
				</div>

			</div>

		</div>

		<div class="control-group">
		    <label class="control-label" for='content'> Content</label>
		    <textarea class="form-control ckeditor" id='content' name="content" rows='10'><?=Input::old('content', $page->content);?></textarea>
		</div>	

		<p><br>
		    <button type="submit" class="btn btn-success" name="submit"><i class="fa fa-check"></i> Submit</button>
		</p>	

		</form>

    </div>
</div>	


</section>