<style>
	#da-thumbs {
		list-style: none;
		padding: 0;
		margin: 0;
		display: flex;
		justify-content: space-between;
	}

	#da-thumbs li {
		flex: 0 0 13%;
		/* Giảm giá trị của thuộc tính flex */
		margin-bottom: 20px;
	}

	#da-thumbs img {
		max-width: 100%;
		/* Chiều rộng tối đa của ảnh là 100% của phần tử cha */
		height: auto;
	}
</style>
<ul id="da-thumbs" class="da-thumbs">
	<li>
		<a href="">
			<img src="images/lap-trinh-ngau-het-say.jpg" />

		</a>
	</li>
	<li>
		<a href="">
			<img src="images/sach-clean-code-ma-sach-va-con-duong-tro-thanh-lap-trinh-vien-gioi.jpg" />

		</a>
	</li>
	<li>
		<a href="">
			<img src="images/sach-vi-dieu-khien-va-ung-dung-giao-trinh-thuc-hanh-pic.jpg" />

		</a>
	</li>
	<li>
		<a href="">
			<img src="images/sach.jpg" />
		</a>
	</li>
</ul>