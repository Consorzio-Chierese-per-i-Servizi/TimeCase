<?php
//	$this->assign('title','TimeCase | Reports');
	$this->assign('title','TimeCase CCS | Resoconti');
	$this->assign('nav','reports');

	$this->display('_Header.tpl.php');
?>

<script type="text/javascript">
	$LAB.script("bootstrap/js/bootstrap-datepicker.js")
	.script("bootstrap/js/bootstrap-combobox.js")
	.script("scripts/libs/underscore-min.js").wait()
	.script("scripts/libs/underscore.date.min.js")
	.script("scripts/libs/backbone.js")
	.script("scripts/app.js")
	.script("scripts/model.js").wait()
	.script("scripts/view.js").wait()
	.script("scripts/app/reports.js").wait()
	.script("scripts/timecase.js").wait()
	.script("scripts/app/reports.js").wait(function(){
        // Mesi in italiano nel report
        _date.monthsShort = ["Gen","Feb","Mar","Apr","Mag","Giu","Lug","Ago","Set","Ott","Nov","Dic"];
		$(document).ready(function(){
			page.init();
		});

		// hack for IE9 which may respond inconsistently with document.ready
		setTimeout(function(){
			if (!page.isInitialized) page.init();
		},1000);
	});
</script>

<div class="container main">

<div class="row">
<div class="span12">

<h1>
<!--	<i class="icon-file"></i> Reports-->
	<i class="icon-file"></i> Resoconti
	<span id="modelLoader" class="loader progress progress-striped active"><span class="bar"></span></span>

	<span class='filter-button pull-right'>
	<button class="btn btn-primary showReportButton" data-type="csv"><i class="icon-download"></i>&nbsp; Download CSV</button>
<!--	<button class="btn btn-primary showReportButton" data-type="html"><i class="icon-file"></i>&nbsp; Show HTML</button>-->
	<button class="btn btn-primary showReportButton" data-type="html"><i class="icon-file"></i>&nbsp; Vedi HTML</button>
	</span>
</h1>
<div class="clearfix"></div>

</div>
</div> <!-- // row -->

<div class="row">
<div class="span12">

<div id="filterContainer">
<div id="collectionAlert"></div>
<hr>

<form onsubmit="return false;" class="form">
<fieldset>
<div class="pull-left">
	<div class="control-group pull-left" id="filterStartInputContainer">
<!--		<label for="start" class="control-label">From</label>-->
		<label for="start" class="control-label">Dal</label>
		<div class="controls ">
			<input type="text" value="01-01-<?php echo date('Y')?>" id="start" class="date-picker input-large">
			<input type="text" class="time-picker input-xlarge" id="start-time" value="00:00">
			<span class="help-inline"></span>
		</div>
	</div>
	<div class="control-group pull-left" id="filterEndInputContainer">
<!--		<label for="end" class="control-label">To</label>-->
		<label for="end" class="control-label">Al</label>
		<div class="controls ">
			<input type="text" value="<?php echo date('d-m-Y')?>" id="end" class="date-picker input-large">
			<input type="text" class="time-picker input-xlarge" id="end-time" value="23:59">
			<span class="help-inline"></span>
		</div>
	</div>
</div>
<div class="clearfix"></div>

<div class="pull-left">

<!--	--><?php //if(!($this->currentUser->LevelId & $this->ROLE_CUSTOMER)):?>
	<?php if(false):?>
	<div class="control-group pull-left combo" id="filterCustomerIdInputContainer">
		<label for="customerId" class="control-label">Customer</label>
		<div class="controls">
			 <select name="customerId" id="customerId">
			 	<?php echo $this->cusomerOptions; ?>
			 </select>
			<span class="help-inline" style="display: none;"></span>
		</div>
	</div>
	<?php endif;?>

	<div class="control-group pull-left combo" id="filterProjectIdInputContainer">
<!--		<label for="projectId" class="control-label">Project</label>-->
		<label for="projectId" class="control-label">Finestra di monitoraggio</label>
		<div id="parentProjectId" class="controls">
			<select id="projectId" name="projectId">
				<?php echo $this->projectOptions; ?>
			</select>
			<span class="help-inline" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group pull-left combo" id="userIdInputContainer">
<!--		<label for="userId" class="control-label">User</label>-->
		<label for="userId" class="control-label">Dipendente</label>
		<div class="controls">
			 <select name="userId" id="userId">
			 	<?php echo $this->userOptions; ?>
			 </select>
			<span class="help-inline" style="display: none;"></span>
		</div>
	</div>
    <?php if(false):?>
	<div class="control-group pull-left combo" id="filterCategoryIdInputContainer">
		<label for="categoryId" class="control-label">Work Type</label>
		<div class="controls">
			<select name="categoryId" id="categoryId">
				<?php echo $this->categoryOptions; ?>
			</select>
			<span class="help-inline" style="display: none;"></span>
		</div>
	</div>
    <?php endif;?>


</div>
<div class="clearfix"></div>

</fieldset>
</form>

</div>

</div>

</div> <!-- // row -->


<div class="row">
<div class="span12">


<!-- underscore template for the collection -->
	<script type="text/template" id="timeEntryCollectionTemplate">
		<table class="collection table report">
		<thead>
			<tr>
<!--				<th>Customer</th>-->
<!--				<th id="header_ProjectId">Project<# if (page.orderBy == 'ProjectId') { #> <i class='icon-arrow-<#= page.orderDesc ? 'up' : 'down' #>' /><# } #></th>-->
				<th id="header_ProjectId">Finestra di monitoraggio<# if (page.orderBy == 'ProjectId') { #> <i
                            class='icon-arrow-<#= page
				.orderDesc ? 'up' : 'down' #>' /><# } #></th>
<!--				<th id="header_UserId">User<# if (page.orderBy == 'UserId') { #> <i class='icon-arrow-<#= page.orderDesc ? 'up' : 'down' #>' /><# } #></th>-->
				<th id="header_UserId">Dipendente<# if (page.orderBy == 'UserId') { #> <i class='icon-arrow-<#= page
				.orderDesc ? 'up' : 'down' #>' /><# } #></th>
<!--				<th id="header_CategoryId">Work Type<# if (page.orderBy == 'CategoryId') { #> <i class='icon-arrow-<#= page.orderDesc ? 'up' : 'down' #>' /><# } #></th>-->
				<th id="header_CategoryId">Tipo registrazione<# if (page.orderBy == 'CategoryId') { #> <i
                            class='icon-arrow-<#= page
				.orderDesc ? 'up' : 'down' #>' /><# } #></th>
<!--				<th id="header_Description">Description<# if (page.orderBy == 'Description') { #> <i class='icon-arrow-<#= page.orderDesc ? 'up' : 'down' #>' /><# } #></th>-->
				<th id="header_Description">Descrizione<# if (page.orderBy == 'Description') { #> <i
                            class='icon-arrow-<#= page.orderDesc ? 'up' : 'down' #>' /><# } #></th>
                <th id="header_Promoter">Organizzatore<# if (page.orderBy == 'Promoter') { #> <i
                            class='icon-arrow-<#= page.orderDesc ? 'up' : 'down' #>' /><# } #></th>
<!--				<th id="header_Start">Start<# if (page.orderBy == 'Start') { #> <i class='icon-arrow-<#= page.orderDesc ? 'up' : 'down' #>' /><# } #></th>-->
				<th id="header_Start">Dal<# if (page.orderBy == 'Start') { #> <i class='icon-arrow-<#= page.orderDesc ?
'up' : 'down' #>' /><# } #></th>
<!--				<th id="header_End">End<# if (page.orderBy == 'End') { #> <i class='icon-arrow-<#= page.orderDesc ? 'up' : 'down' #>' /><# } #></th>-->
				<th id="header_End">Al<# if (page.orderBy == 'End') { #> <i class='icon-arrow-<#= page.orderDesc ?
'up' : 'down' #>' /><# } #></th>
                <th id="header_Certificate">Attestato<# if (page.orderBy == 'Certificate') { #> <i
                            class='icon-arrow-<#= page.orderDesc ? 'up' : 'down' #>' /><# } #></th>
<!--				<th id="header_Duration">Duration</th>-->
				<th id="header_Duration">Durata</th>
			</tr>
		</thead>
		<tbody>
		<# items.each(function(item) { #>
			<tr id="<#= _.escape(item.get('id')) #>">
<!--				<td><#= _.escape(item.get('customerName') || '') #></td>-->
				<td><#= _.escape(item.get('projectTitle') || '') #></td>
				<td><#= _.escape(item.get('userName') || '') #></td>
				<td><#= _.escape(item.get('categoryName') || '') #></td>
				<td><#= _.escape(item.get('description') || '') #></td>
				<td><#= _.escape(item.get('promoter') || '') #></td>
				<td><#if (item.get('start')) { #><#= _date(app.parseDate(item.get('start'))).format('D MMM, H:mm') #><#
                    } else { #>NULL<# } #></td>
				<td><#if (item.get('end')) { #><#= _date(app.parseDate(item.get('end'))).format('D MMM, H:mm') #><# }
                    else { #>NULL<# } #></td>
                <td><#= item.get('certificate') == 1 ? 'Sì' : 'No' #></td>
				<td class="rtext"><#= _.escape(item.get('durationFormatted') || '') #></td>
			</tr>
		<# }); #>
		</tbody>
		</table>

<!--<span id="report-total" class="label label-success pull-right">Total Duration: <span id="totalDurationHolder"></span></span>-->
<span id="report-total" class="label label-success pull-right">Tempo totale: <span
            id="totalDurationHolder"></span></span>

		<#=  view.getPaginationHtml(page) #>
	</script>

	<div id="timeEntryCollectionContainer" class="collectionContainer"></div>


</div>
</div> <!-- /row -->

	<!-- footer -->
	<hr>

	<footer>

	</footer>

</div> <!-- /container -->

<?php
	$this->display('_Footer.tpl.php');
?>
