<?php
require_once 'db.php';
$db = new Db();
$id=$_REQUEST['id'];
$brand=$db->getOne($id);
?>
<?php require_once 'header.php';?>
<form action="process.php" method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <strong>Cập nhật thương hiệu</strong>
                    </div>
                    <div class="col-6 text-end">
                        <a class="btn btn-sm btn-info" href="index.php">Về danh sách</a>
                        <button type= "submit" name="CAPNHAT" class="btn btn-sm btn-success">Lưu[Cập nhật]</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <div class="mb-3">
                            <input type="hidden" name="id" value="<?=$brand['id'];?>" >
                            <lable for="name">Tên thương hiệu</lable>
                            <input type="text" name="name" value="<?=$brand['name'];?>" class="form-control" required >
                        </div>
                        <div class="mb-3">
                            <lable for="slug">Slug</lable>
                            <input type="text" name="slug" value="<?=$brand['slug'];?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <lable for="description">Mô tả</lable>
                            <textarea name="description" id="description" class="form-control"><?=$brand['description'];?>"</textarea>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <lable for="image">Hình ảnh</lable>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <lable for="sort_order">Sắp xếp</lable>
                            <select name="sort_order" id="sort_order" class="form-control">
                                <option value="1">None</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <lable for="status">Trạng thái</lable>
                            <select name="status" id="status" class="form-control">
                                <option value="1">Xuất bản</option>
                                <option value="2">Không xuất bản</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
</form>
<?php require_once 'footer.php';?>
    
    