<div class="container">
    <div class="mt-5 wrapper">
        <div class="card">
            <div class="card-header">
                <h3>PHP Skills Test -  Admire Mukoko</h3>
            </div>
            <div class="card-body">
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="typedValue" class="fw-bold">Sorted String</label>
                        <div class="input-group">
                            <figure class="text-center">
                                <blockquote class="blockquote">
                                    <?php
                                    include('./implementations/sortingImpl.php')
                                    ?>
                                </blockquote>
                            </figure>
                        </div>
                    </div>
                    <br>
                    <div class="form-group mt-4">
                        <label for="typedValue" class="fw-bold">Enter String to Sort</label>
                        <div class="input-group">
                            <input type="text" name="typedValue" id="typedValue" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <label for="sortMethod" class="fw-bold">Select sorting strategy</label>
                        <div class="input-group">
                            <select name="sortMethod" id="sortMethod" class="form-select">
                                <option value="">Select...</option>
                                <option value="BubbleSortMethod">BubbleSort</option>
                                <option value="MergeSortMethod">MergeSort</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <div class="input-group">
                            <button type="submit" name="submit" class="btn btn-primary col-sm-4">Sort String</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

