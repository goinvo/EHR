$(document).ready(function(){
	//open med
	$("tbody tr").click(function(){
		if($(this).hasClass('active_to')){
			$(this).removeClass('active_to');
		}else{
			$(this).addClass('active_to');
		}
	});
	
	//history toggle
	
	/*$(".show_closed").click(function(){
		if($(this).html()=='Hide history'){
			$(this).html('Show history');
			$('.closed').show();
		}else{
			$(this).html('current');
			altRows('tr:odd td', 'odd');
		}
		$("tr.closed").fadeToggle('medium');
	}); */
	$(".current").click(function(){
		if($(this).hasClass('active')){
			$("tr.closed").hide();
		}else{
			$(this).addClass('active');
			$(".all").removeClass('active');
			$("tr.closed").hide();
		}
		//$("tr.closed").fadeToggle('medium');
	}); 
	$(".all").click(function(){
		if($(this).hasClass('active')){
			$("tr.closed").show();
		}else{
			$(this).addClass('active');
			$(".current").removeClass('active');
			$("tr.closed").show();
		}
		//$("tr.closed").fadeToggle('medium');
	});
	
	
	$(".to_issue").hover(function(){
		if($(this).hasClass('active_to')){
			$(this).removeClass('active_to');
		}else{
			$(this).addClass('active_to');
		}
	});
	
	$(".to_pv").hover(function(){
		if($(this).hasClass('active_to')){
			$(this).removeClass('active_to');
		}else{
			$(this).addClass('active_to');
		}
	});
	/*$('.to_pv').click(function(){
		window.location.href = './version.php';
	});*/
	
	/*version toggles*/
	$("#current_version_one tr.current_active").click(function(){
		$("#version_table_one").show();
		$("#table_slide_one").slideToggle('slow');
		$(this).hide();
	});
	$('#version_table_one tr').click(function(){
		$("#current_version_one tr.current_active").slideToggle('slow').parents().eq(3).find("#table_slide_one").slideToggle(500);
	});
	
/* Filtering and Sorting
	========================== */
	$('td.condition, td.provider').click(function(){
		if($(this).hasClass('active')){
			$('#filter').val('').keyup();
			$(this).removeClass('active');
		}else if(!$(this).hasClass('active')){
			$('#filter').val($(this).html()).keyup().focus();
			$(this).addClass('active');
		}
	});
	
	altRows('tr:odd td', 'odd');
	
	//default each row to visible
	$('tbody tr').addClass('visible');
	
	//overrides CSS display:none property
	//so only users w/ JS will see the filter box
	$('#search').show();
	
	//fire the function every time a key is released
	$('#filter').keyup(function(event) {
		//if esc is pressed or nothing is entered
		if (event.keyCode == 27 || $(this).val() == '') {
			//if esc is pressed we want to clear the value of search box
			$(this).val('');
			
			//we want each row to be visible because if nothing
			//is entered then all rows are matched.
			$('tbody tr').removeClass('visible').show().addClass('visible');
		} else { //if there is text, lets filter
			filter('tbody tr', $(this).val());
		}
		//reapply altRows
		$('.visible td').removeClass('odd');
		altRows('.visible:odd td', 'odd');
	});

	//grab all header rows  
	$('thead th').each(function(column) {
		//addClass .sortable and start click bind
		//to allow certain columns to be sortable, remove the addClass(), change the selector to target thead th.sortable, or whatever you want to make the class
		//$('thead th.sortable').click(function(){
		if($(this).hasClass('sortable')){
			$(this).click(function(){
				//get column that was clicked and use it to sort with
				var findSortKey = function($cell) {
					console.log ($cell.find('.sort-key').text().toUpperCase());
					return $cell.find('.sort-key').text().toUpperCase() + ' ' + $cell.text().toUpperCase();
				};
				var sortDirection = $(this).is('.sorted-asc') ? -1 : 1;

				//step back up the tree and get the rows with data for sorting
				var $rows = $(this).parent().parent().parent().find('tbody tr').get();

				//loop through all the rows and find   
				$.each($rows, function(index, row) {
					row.sortKey = findSortKey($(row).children('td').eq(column));
				});
				
				//compare and sort the rows alphabetically
				$rows.sort(function(a, b) {
					if (a.sortKey < b.sortKey) return -sortDirection;
					if (a.sortKey > b.sortKey) return sortDirection;
						return 0;
				});
				
				//add the rows in the correct order to the bottom of the table
				$.each($rows, function(index, row) {
					$('tbody').append(row);
					row.sortKey = null;
				});
				
				//identify the column sort order
				$('th').removeClass('sorted-asc sorted-desc');
				var $sortHead = $('th').filter(':nth-child(' + (column + 1) + ')');
				sortDirection == 1 ? $sortHead.addClass('sorted-asc') : $sortHead.addClass('sorted-desc');
				
				//identify the column to be sorted by
				$('td').removeClass('sorted')
					.filter(':nth-child(' + (column + 1) + ')')
					.addClass('sorted');
					
				$('.visible td').removeClass('odd');
				altRows('.visible:even td', 'odd');
			});
		}
	});
});


//used to apply alternating row styles
	function altRows(selector, className) {  
		$(selector).removeClass(className).addClass(className);  
	}
	
//filter
	function filter(selector, query) {  
		query =   $.trim(query); //trim white space  
		//query = query.replace(/ /gi, '|'); //add OR for regex query  
	  
		$(selector).each(function() { 		
			($(this).text().search(new RegExp(query, "i")) < 0) ? $(this).hide().removeClass('visible') : $(this).show().addClass('visible');  
		});  
	}