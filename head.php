		<div class="span12">
				<div class="header">
				<div class="pull-left">
				<style>
                    /* Thêm kiểu cho div chứa hình ảnh */
                    .stilogo {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 212px;
						 /* Tùy chỉnh chiều cao theo ý muốn */
						 width: 150%;
                    }

                </style>
				<img class="stilogo" src="LMS/moi.png">
				</div>
				</div>

					<div class="alert alert-info"><Strong>Heads Up!</strong>&nbsp;Welcome to Trường Công nghệ thông tin và Truyền thông.
					
					
					
	
								
							<div class="pull-right">
								<i class="icon-calendar icon-large"></i>
								<?php
								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>
							</div>
					</div>
				
					
				</div>