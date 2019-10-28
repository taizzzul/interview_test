<?php $__env->startSection('content'); ?>
    <div class="container-fluid  app-body app-home">


        <div class="panel panel-default">
            <div class="panel-heading">Panel Heading</div>
            <div class="panel-body">
                <form class="form-inline" action="" style="max-width: 100%;margin-bottom: 1rem">
                    <div class="form-group">
                        <i class="fa fa-search-minus" style="border:none"></i>
                        <input type="text" class="form-control" id="text" >
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" id="pwd">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="sel1">
                            <option>All Group</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>


                </form>
                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Group Name</th>
                        <th scope="col">Group Type</th>
                        <th scope="col">Account Name</th>
                        <th scope="col">Post Text</th>
                        <th scope="col">Time</th>
                    </tr>
                    </thead>
                    <tbody>
                <?php $__currentLoopData = $buffers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buffer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($buffer->name); ?></td>
                        <td><?php echo e($buffer->type); ?></td>
                        <td><?php echo e($buffer->status); ?> }}</td>
                        <td><img src="<?php echo e($buffer->add_image); ?>" alt=""></td>
                        <td>@mdo</td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>
                <div class="container">
                    <?php echo e($buffers->links()); ?>

                </div>

            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>