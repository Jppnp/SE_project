<?php 
    include('header.php');
    $plo = "SELECT * FROM main_plo";
    $result_plo = mysqli_query($con, $plo);
?>

<br><br>
<div class="d-flex justify-content-evenly">
    <div class=".justify-content-center">
        <h3>วัตถุประสงค์</h3>
    </div>
</div>
<div class="d-flex justify-content-sm-end" style="margin-right: 6rem;">
        <a href="reg_plo.php" class="btn btn-primary" style="padding-top: 10px;"><h6>เพิ่มวัตถุประสงค์</h6></a>
</div>
<div class="d-flex justify-content-center" style="margin-top: 1rem;">
    <div class="card" style="width: 75%; margin-top: 1rem;">
        <table class="table table-warning table-sm">
            <thead>
                <tr>
                    <th scope="col" class="text-center" style="width: 5%;"><span>ข้อที่</span></th>
                    <th scope="col" class="text-center">รายละเอียด</th>
                    <th scope="col" class="text-center" style="width: 5%;">แก้ไข</th>
                </tr>
            </thead>
            <tbody>
                <div class="accdion accordion-flush" id="accordionFlushExample">
                    <?php while($row = mysqli_fetch_assoc($result_plo)): ?>
                        <tr>
                            <th scope="row" class="text-center"><?php echo $row['plo_id']; ?></th>
                            <td>
                                <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-heading<?php echo $row['plo_id']; ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $row['plo_id']; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $row['plo_id']; ?>">
                                        <?php echo $row['plo_des']; ?>
                                    </button>
                                    </h4>
                                    <div id="flush-collapse<?php echo $row['plo_id']; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $row['plo_id']; ?>" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <?php
                                            $id = $row['plo_id'];
                                                $sub_plo = "SELECT * FROM sub_plo WHERE main_plo_id = $id";
                                                $re_sub = mysqli_query($con, $sub_plo);?>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="width: 5%;">ข้อ</th>
                                                            <th scope="col">รายละเอียด</th>
                                                            <th scope="col" style="width: 5%;">แก้ไข</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php while($row_sub = mysqli_fetch_assoc($re_sub)): ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $row_sub['sub_plo_id']; ?></th>
                                                                <td><?php echo $row_sub['sub_plo_des']; ?></td>
                                                                <th scope="row" class="text-center">
                                                                    <a href="edit_plo.php?edit_s=<?php echo $row['plo_id'],$row_sub['sub_plo_id'];?>;" class="btn btn-warning">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                                                                        <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
                                                                        </svg>
                                                                    </a>
                                                                </th>
                                                            </tr>
                                                        <?php endwhile ?>
                                                    </tbody>
                                                </table>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <th scope="row" class="text-center">
                                <a href="edit_plo.php?edit_p=<?php echo $row['plo_id'];?>" class="btn btn-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                                    <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
                                    </svg>
                                </a>
                            </th>
                        </tr>
                    <?php endwhile ?>
                </div>
            </tbody>
        </table>
    </div>
</div>
