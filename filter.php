<!-----------------------------------------------------------------------
Filters
------------------------------------------------------------------------->

<section class="filter" ">
        <form action=" indexfilteredphones.php" method="post">
        <div class="filter-icon">
            <h3> FILTERS <i class="icon fas fa-angle-down"></i></h3>
        </div>
        <div class="drop ">
            <!--filter-drop-down-list will 
            be active when click using js-->
            <div class="filter-type filter-brand">
                <h4>
                    <b>Brands</b>
                </h4>

                <div class="checkboxes">
                    <input type="checkbox" name="applebrand" id="apple-label"> <label for="apple-label">Apple </label><br />
                    <input type="checkbox" name="samsungbrand" id="samsung-label"> <label for="samsung-label">Samsung </label> <br />
                    <input type="checkbox" name="oneplusbrand" id="oneplus-label"> <label for="oneplus-label">One plus </label> <br />
                    <input type="checkbox" name="lgbrand" id="lg-label"> <label for="lg-label">Lg </label><br />
                    <input type="checkbox" name="nokiabrand" id="nokia-label"> <label for="nokia-label">Nokia </label> 
                </div>
            </div>

            <div class="filter-type filter-price">
                <h4>
                    <b>Price</b>
                </h4>

                <div class="checkboxes">
                    <input type="checkbox" name="below20" id="below20-label"> <label for="below20-label">below 20K </label><br>

                    <input type="checkbox" name="above20" id="above20-label"> <label for="above20-label">above 20K </label>


                </div>
            </div>

            <input class="filter-submit-btn btn-all" type="submit" name="gosubmitfilter" value="Submit">
        </div>
        </form>
    </section>
