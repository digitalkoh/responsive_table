$(document).ready(function(){
	
	// Responsive DIV TABLE
	if ($('.divtable').length){ // if at least 1 divtable is on page

		$('.divtable').each(function(){ // loop each respTbl table
			var tbl = $(this);
			var tblName = $(tbl).attr('id');
			var tblName = []; // create array using (table ID) name

			$('.head .tcell' ,this).each(function(){  // loop each .head
				tblName.push($(this).html());  // populate array with label
			});
			
			// add attribute to each .tcell
			$('.trow' ,tbl).each(function(){  // loop each .trow
				$('.tcell', this).each(function(i){
					$(this).not('.keepLabel').prepend('<span>' + tblName[i] +'</span>');
				});
				
				$('.tcell', this).last().addClass('last');
				
			});
			
			$('.trow' ,tbl).not('.head').first().addClass('first');
			$('.trow' ,tbl).not('.total').last().addClass('last');
			
			
			function setWidth(){
				// Distribute width evenly only when in wide view (float state is 'left' in wide view)
				if($('.tcell', tbl).css('float') === 'left'){
					// assign width for each cell
					
					// offset should be defined on the DIV table itself. If not, use default 25.
					// offset is used to fine tune the width of cells.
					var offset = 25;
					if($(tbl).attr("var-offset")){
						offset = $(tbl).attr("var-offset");
					}
					
					// If 'var-labelsize' is defined, use it
					if($(tbl).attr("var-labelsize")){
						var keepAsLabelWidth = $(tbl).attr("var-labelsize");
						$('.tcell', tbl).css({'width': (($(tbl).width()-keepAsLabelWidth)/(tblName.length-1))-offset});
						
						// Apply first column width to all class with 'keepAsLabel'
						$('.tcell.keepAsLabel', tbl).css({'width': keepAsLabelWidth+'px'});
					} else {
						// If first column label isn't defined, distribute width as usual
						// normal width = parent's width divided by number of columns minus padding.
						$('.tcell', tbl).css({'width': $(tbl).width()/tblName.length-offset});
					}
				}else{
					$('.tcell', tbl).css({'width':'auto'});
				}
			}
			
			setWidth();
			
			$(window).resize(function(){
				setWidth();
			});
			
			// alternating row color
			$('.trow',tbl).filter(":even").addClass('altColor1').end().filter(":odd").addClass('altColor0');
		});
	}
	// Responsive DIV TABLE
	
});