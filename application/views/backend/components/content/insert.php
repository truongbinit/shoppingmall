<div class="container-fluid">
	<div class="d-flex align-items-baseline justify-content-between mb-5">
		<!-- Breadcrumb -->
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript: void(0);">Bảng điều khiển</a></li>
				<li class="breadcrumb-item"><a href="javascript: void(0);">Danh sách bài viết</a></li>
				<li class="breadcrumb-item active" aria-current="page">Thêm mới bài viết</li>
			</ol>
		</nav>
	</div>
	<form action="<?php echo base_url() ?>admin/content/insert.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
		<div class="row">
			<div class="col d-flex">
				<!-- Card -->
				<div class="card border-0 flex-fill w-100">
					<div class="card-header border-0">

						<div class="d-flex flex-column flex-md-row align-items-md-center justify-content-end">
							<!-- Title -->
							<h2 class="card-header-title h4 text-uppercase">
								Thêm mới bài viết
							</h2>
							<!-- Button -->
							<button  class="list-fuzzy-search mw-md-300px ms-md-auto mt-5 mt-md-0 mb-3 mb-md-0 btn btn-success ms-md-4" type="submit">
								Lưu bài viết
							</button>
							<!-- Button -->
							<a type="button" class="btn btn-outline-danger ms-md-4" href="admin/content" role="button">
								Hủy bỏ
							</a>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-9">
								<div class="mb-4">
									<label for="validationCustom01" class="form-label">Tiêu đề bài viết</label>
									<input type="text" class="form-control" name="name" style="width:100%" placeholder="Tên bài viết">
									<div class="error" id="password_error"><?php echo form_error('name') ?></div>
								</div>
								<div class="mb-4">
									<label for="validationCustom01" class="form-label">Mô tả ngắn</label>
									<textarea name="introtext" class="form-control" placeholder="Mô tả ngắn" rows="2"></textarea>
								</div>
								<div class="mb-4">
									<label for="validationCustom01" class="form-label">Chi tiết bài viết</label>
									<textarea name="fulltext" id="fulltext" class="form-control" ></textarea>
      								<script>CKEDITOR.replace('fulltext');</script>
								</div>
							</div>
							<div class="col-md-3">
							<div class="mb-4">
									<label for="validationCustom01" class="form-label">Trạng thái</label>
									<select name="status" id="statuscontent" class="form-control form-select" autocomplete="off" data-select>
										<option value="1">Công khai</option>
										<option value="0">Bản nháp</option>
									</select>
								</div>
							<div class="mb-4">
								<label for="formFile" class="form-label">Hình ảnh đại diện</label>
								<input class="form-control" type="file" id="image_list" name="img" style="width: 100%" required>
								<img class="uploadimg" id="uploadedImage" src="<?php echo base_url() ?>public/images/admin/none.webp" alt="Uploaded Image">
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	    $(document).ready(function() {
        $('#statuscontent').select2({
            width: "100%",
            placeholder: "Trạng thái",
            "language": {
                "noResults": () => "Không tìm thấy dữ liệu"

            }
        });
    });

	document.getElementById('image_list').addEventListener('change', function(){
  if (this.files[0] ) {
    var picture = new FileReader();
    picture.readAsDataURL(this.files[0]);
    picture.addEventListener('load', function(event) {
      document.getElementById('uploadedImage').setAttribute('src', event.target.result);
      document.getElementById('uploadedImage').style.display = 'block';
    });
  }
});
</script>