$(document).ready(function(){
	//to eventually open med
	//click a row to highlight
	$("tbody tr").click(function(){
		$("tbody tr").each(function(){
			$(this).removeClass('active_to');
		});
		
		if($(this).hasClass('active_to')){
			$(this).removeClass('active_to');
		}else{
			$(this).addClass('active_to');
		}
	});
	
		/*drawer toggles*/
	//House additional details and information in drawers that show up
		//when a row is selected
	/*$("#current_med_one tr.current_active").click(function(){
		$("#med_detail_one").show();
		$("#detail_slide_one").slideToggle('slow');
		$(this).hide();
	});
	$('#med_detail_one tr').click(function(){
		$("#current_med_one tr.current_active").slideToggle('slow').parents().eq(3).find("#detail_slide_one").slideToggle(500);
	});*/
	
	//turn brand column on and off
	$(".brandToggle").click(function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$(".brand").hide();
		}else{
			$(this).addClass('active');
			$(".brand").show();
		}
	}); 
	
	//show only current medications
	$(".current").click(function(){
		//if a filter was just run, clear the filter
		$('#filter').val('').keyup();
		$('tr.active_to td.active').removeClass('active');
		$('tr.active_to').removeClass('active_to');

		$(this).addClass('active');
		$(".all").removeClass('active');
		//hide inactive medications
		$("tr.closed").hide();

		//when the list changes height, change the height of the today 
			//marker in the mini timeline
		$('.todaybar').css('height', $('.main_table').height() - 27);
	}); 

	//show all medications
	$(".all").click(function(){
		//if a filter was just run, clear the filter
		$('#filter').val('').keyup();
		$('tr.active_to td.active').removeClass('active');
		$('tr.active_to').removeClass('active_to');
	
		$(this).addClass('active');
		$(".current").removeClass('active');
		//show inactive medications
		$("tr.closed").show();

		//when the list changes height, change the height of the today 
			//marker in the mini timeline
		$('.todaybar').css('height', $('.main_table').height() - 27);
	});
	

	
/* Filtering and Sorting
	========================== */
	//click on a condition or provider to filter
	//when filtering, all related meds are shown, whether you 
		//were in current or all state
	//not sophisticated enough to tell whether you were in 
		//current/all to start, so when the filter is cleared,
		//defaults to all, but SHOULD tell what state you were
		//in and return to that state (not enough resources)
	$('td.condition, td.provider').click(function(){
		if($(this).hasClass('active')){
			$('#filter').val('').keyup();
			$(this).removeClass('active');
		}else if(!$(this).hasClass('active')){
			$('#filter').val($(this).html()).keyup().focus();
			$(this).addClass('active');
			$(".all").addClass('active');
			$(".current").removeClass('active');
		}
	});
	//when filtering, adjust the height of the today marker in 
		//the mini timeline
	$('.todaybar').css('height', $('.main_table').height() - 27);
	
	//shade alternate rows by applying odd class
	//altRows('tr:odd td', 'odd');
	
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
		} else { //if there is text, let's filter
			filter('tbody tr', $(this).val());
		}
		//reapply altRows
		//$('.visible td').removeClass('odd');
		//altRows('.visible:odd td', 'odd');
		
		//adjust height of today marker in mini timeline
		$('.todaybar').css('height', $('.main_table').height() - 27);
	});
	
	//when not sorting by cols with data-sort attr, remove 
		//classes applied to visually define groups
	function removeGroups(){
		for(var i=0; i <= $('tr').length;i++){
			$('tr').removeClass('group'+i);
		}
	}

	//grab all header rows  
	$('thead th').each(function(column) {
		//addClass .sortable and start click bind
			//allows certain columns to be sortable
		if($(this).hasClass('sortable')){ 
			$(this).click(function(){
				removeGroups();			
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
					
				//$('.visible td').removeClass('odd');
				//altRows('.visible:even td', 'odd');

				//when sorting by cols with data-sort attr, add 
					//classes to visually define groups, when
					//sorting again, clear the prev value and 
					//redefine groups, if there are groups, if not
					//clear groups
				var sortAttr = $(this).attr('data-sort');
				var oldVal = '';
				var sortCount = 0;
				
				$('tr td.'+sortAttr).each(function(){
					if(oldVal != $(this).text()){
						sortCount++;
					}
					$(this).parent().addClass('group'+sortCount);
					oldVal = $(this).text();
				});
			});
		}
	});
});


	//used to apply alternating row styles
	/*function altRows(selector, className) {  
		$(selector).removeClass(className).addClass(className);  
	}*/
	
//filter: lazy search
	function filter(selector, query) {  
		query =   $.trim(query); //trim white space  
		//query = query.replace(/ /gi, '|'); //add OR for regex query (translates space ' ' as OR, so removed)
	  
		$(selector).each(function() { 		
			($(this).text().search(new RegExp(query, "i")) < 0) ? $(this).hide().removeClass('visible') : $(this).show().addClass('visible');  
		});  
	}