<?php
/**
 * ========================================
 *        Sort Bar
 *
 * ========================================
 */
?>

<div class="pseudo-search f-controls">

    <!-- Search -->
    <label for="s" class="hidden assistive-text">Search</label>
    <input type="search" id="myInput" onkeyup="myFunction()" placeholder="Sort results here...">

    <button class="w3-btn" onclick="sortListDir()">
        <i class="fas fa-sort"></i>
        <span class="sr-only">Ascending / Descending</span>
    </button>
    <button class="w3-btn" onclick="sortList()">
        <i class="fas fa-sort-alpha-down"></i>
        <span class="sr-only">Alphabetically</span>
    </button>

    <button class="w3-btn"  data-f-toggle-control="code" title="Toggle Code">
        <i class="fas fa-sort-alpha-down"></i>
        <span class="sr-only">Alphabetically</span>
    </button>

    <button class="w3-btn"  data-f-toggle-control="notes" title="Toggle Notes">
        <i class="fas fa-sort-alpha-down"></i>
        <span class="sr-only">Alphabetically</span>
    </button>

    <button class="w3-btn"  data-f-toggle-control="labels" title="Toggle Labels">
        <i class="fas fa-sort-alpha-down"></i>
        <span class="sr-only">Alphabetically</span>
    </button>

    <!-- <div class="f-controls">
    	<div class="f-control f-global-control" data-f-toggle-control="labels" title="Toggle Labels">
    		<svg>
    			<use xlink:href="#f-icon-labels" />
    		</svg>
    	</div>
    	<div class="f-control f-global-control" data-f-toggle-control="notes" title="Toggle Notes">
    		<svg>
    			<use xlink:href="#f-icon-notes" />
    		</svg>
    	</div>
    	<div class="f-control f-global-control" data-f-toggle-control="code" title="Toggle Code">
    		<svg>
    			<use xlink:href="#f-icon-code" />
    		</svg>
    	</div>
    </div> -->

</div>

<script type="text/javascript">

function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('a');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("h4")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

</script>


<script>
function sortListDir() {
  var list, i, switching, b, shouldSwitch, dir, switchcount = 0;
  list = document.getElementById("myUL");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  // Make a loop that will continue until no switching has been done:
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    b = list.getElementsByTagName("a");
    // Loop through all list-items:
    for (i = 0; i < (b.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Check if the next item should switch place with the current item,
      based on the sorting direction (asc or desc): */
      if (dir == "asc") {
        if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
          /* If next item is alphabetically lower than current item,
          mark as a switch and break the loop: */
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (b[i].innerHTML.toLowerCase() < b[i + 1].innerHTML.toLowerCase()) {
          /* If next item is alphabetically higher than current item,
          mark as a switch and break the loop: */
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
      // Each time a switch is done, increase switchcount by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

<script>
function sortList() {
  var list, i, switching, b, shouldSwitch;
  list = document.getElementById("myUL");
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    b = list.getElementsByTagName("a");
    // Loop through all list items:
    for (i = 0; i < (b.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Check if the next item should
      switch place with the current item: */
      if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
        /* If next item is alphabetically lower than current item,
        mark as a switch and break the loop: */
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark the switch as done: */
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
    }
  }
}
</script>
