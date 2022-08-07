<?php
include('models/Data.php');
include('services/SortingService.php');
if(isset($_POST['submit'])){
    $typedValue = $_POST['typedValue'];
    $sortMethod = $_POST['sortMethod'];

    echo "<div class='text-left row'>";
    if($typedValue == null){  ?>
        <p class="mb-0 col-sm-12">
            <label class="text-danger fw-bold"> Please enter string to sort. </label>
        </p>
        <?php
    }

    if($sortMethod == null){  ?>
        <p class="mb-0 col-sm-12">
            <label class="text-danger fw-bold"> Please select sorting strategy. </label>
        </p>
        <?php
    }

    echo "</div>";
    if($sortMethod != null && $typedValue != null){

        $data =  new Data($typedValue, $sortMethod);
        $service = new SortingService($data);

        ?>
        <p class="mb-0"> <?php echo "Sorting  value <b> " . $data->getTypedValue() . " </b> using the <b> " . $data->getSortMethod() . " </b> sorting method."; ?></p>
        <br>
        <hr>
        <label class="mb-0"> <?php echo "Output : <b class='text-success fs-2'>" . $service->sortData(). '</b>'; ?></label>
        <?php
    }
} ?>