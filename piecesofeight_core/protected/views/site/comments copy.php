<?php 
	
	$this->pageTitle = "Feedback | " . $this->pageTitle;
	$this->pageDescription = "Check out what others think about our handmade costumes! Bought a costume from us? Leave a comment and let the world
	know how much you love your unique pirate costume!";
	
	$this->pageKeywords = "Leave a comment, pirate costume, handmade costume, leave feedback";



	Yii::app()->clientScript->registerCss(
		'comments-style',
		'
			#comments_container
			{
				margin-top: 2em;
				
			}
			
			.comment,
			.comment_reversed
			{
				width: 85%;
				position: relative;
				overflow: auto;
				margin-bottom: 2em;
				border-top: 2px solid grey;
				padding-top: 0.5em;
				margin: 0 auto;				
				font-style: italic;
				color: #333;
			}
			
			.comment .img_container,
			.comment_reversed .text_container
			{
				float: left;
			}
			
			.comment .text_container,
			.comment_reversed .img_container
			{
				float: right;
			}
			
			.img_container
			{
				width: 23%;
				height: 120px;
				margin-top: 1em;
				margin-bottom: 4em;
				margin-left: 0.25em;
				overflow: hidden;
				border-radius: 2px;
			}
			
			.comment p:before,
			.comment_reversed p:before
			{
				content: open-quote;
				font-size: 18pt;
				text-shadow: 0 1px 1px #909090;
			}
			
			.comment p:after,
			.comment_reversed p:after
			{
				content: no-close-quote;
			}
			
				.img_container img
				{
					width: 100%;
				}
			
			.text_container
			{
				width: 74%;
			}
			
			.date
			{
				font-weight: bold;
				font-size: 8pt;
				float: right;
				margin-top: 1.5em;
				margin-right: 2em;
			}
			
			.source
			{
				float: left;
				margin-top: 1em;
				margin-left: 0.5em;
				font-size: 10pt;
			}
			
			.
		',
		'screen'
	);
?>

<h1>Leave us some Feedback</h1>

<p>
	We love to hear from our customers! If you would like to leave us a comment, 
	or show off your new costume, just drop us a line at our <?php echo CHtml::link('Contact Page', $this->createUrl('site/contact')); ?>
</p>


<div id="comments_container">

	<div class="comment">
		<?php
			$product = Product::model()->findByPk(63);
			$imgUrl = "";
			$imgAlt = "";
			$productUrl = "";
			
			if ($product->id)
			{
				$imgUrl = $product->getDefaultImage()->url;
				$imgAlt = $product->getProductImgAltDescription();
				$productUrl = $product->getUrl();
			}
			
			// Display the default image for this product
			$img = CHtml::image(
				Yii::app()->request->baseUrl . '/images/product-images/' . $imgUrl,
				$imgAlt,
				array('width'=>140, 'class' => 'img')
			);
		?>
		<div class='img_container'>
			<?php echo CHtml::link($img, $productUrl); ?>
		</div>
		<div class='text_container'>
			<p>
				I can't believe I ordered this on /Wednesday/ and have it in my hands on Saturday. Beautiful!
			</p>
			
			<span class="source">
				Suffolk, VA on
				<?php 
					echo CHtml::link(
						'Etsy',
						"http://www.etsy.com/people/susanperez3/feedback", 
						array(
							'target'=>'_blank',
							'rel' => "nofollow"
						)
					);
				?>
			</span>
			
			<span class="date">
				September 15, 2012
			</span>
		</div>
	</div>

	<div class="comment">
		<?php
			$product = Product::model()->findByPk(47);
			$imgUrl = "";
			$imgAlt = "";
			$productUrl = "";
			
			if ($product->id)
			{
				$imgUrl = $product->getDefaultImage()->url;
				$imgAlt = $product->getProductImgAltDescription();
				$productUrl = $product->getUrl();
			}
			
			// Display the default image for this product
			$img = CHtml::image(
				Yii::app()->request->baseUrl . '/images/product-images/' . $imgUrl,
				$imgAlt,
				array('width'=>140, 'class' => 'img')
			);
		?>
		<div class='img_container'>
			<?php echo CHtml::link($img, $productUrl); ?>
		</div>
		<div class='text_container'>
			<p>
				Gorgeous!!! I can't believe I ordered this on Tuesday and have it in my hands on Saturday. Fabulous work, quick shipping - thank you so much!
			</p>
			
			<span class="source">
				Suffolk, VA on
				<?php 
					echo CHtml::link(
						'Etsy',
						"http://www.etsy.com/people/susanperez3/feedback", 
						array(
							'target'=>'_blank',
							'rel' => "nofollow"
						)
					);
				?>
			</span>
			
			<span class="date">
				September 15, 2012
			</span>
		</div>
	</div>

	<div class="comment">
		<?php
			$product = Product::model()->findByPk(62);
			$imgUrl = "";
			$imgAlt = "";
			$productUrl = "";
			
			if ($product->id)
			{
				$imgUrl = $product->getDefaultImage()->url;
				$imgAlt = $product->getProductImgAltDescription();
				$productUrl = $product->getUrl();
			}
			
			// Display the default image for this product
			$img = CHtml::image(
				Yii::app()->request->baseUrl . '/images/product-images/' . $imgUrl,
				$imgAlt,
				array('width'=>140, 'class' => 'img')
			);
		?>
		<div class='img_container'>
			<?php echo CHtml::link($img, $productUrl); ?>
		</div>
		<div class='text_container'>
			<p>
				Absolutely wonderful. Shop owner is wonderful to work with too.
			</p>
			
			<span class="source">
				Bonney Lake, WA on
				<?php 
					echo CHtml::link(
						'Etsy',
						"http://www.etsy.com/people/susanperez3/feedback", 
						array(
							'target'=>'_blank',
							'rel' => "nofollow"
						)
					);
				?>
			</span>
			
			<span class="date">
				September 8, 2012
			</span>
		</div>
	</div>

	<div class="comment">
		<?php
			$product = Product::model()->findByPk(26);
			$imgUrl = "";
			$imgAlt = "";
			$productUrl = "";
			
			if ($product->id)
			{
				$imgUrl = $product->getDefaultImage()->url;
				$imgAlt = $product->getProductImgAltDescription();
				$productUrl = $product->getUrl();
			}
			
			// Display the default image for this product
			$img = CHtml::image(
				Yii::app()->request->baseUrl . '/images/product-images/' . $imgUrl,
				$imgAlt,
				array('width'=>140, 'class' => 'img')
			);
		?>
		<div class='img_container'>
			<?php echo CHtml::link($img, $productUrl); ?>
		</div>
		<div class='text_container'>
			<p>
				The breeches are so well made. I received them within a week. I am very happy with this purchase.
			</p>
			
			<span class="source">
				Fowler, IN on
				<?php 
					echo CHtml::link(
						'Etsy',
						"http://www.etsy.com/people/susanperez3/feedback", 
						array(
							'target'=>'_blank',
							'rel' => "nofollow"
						)
					);
				?>
			</span>
			
			<span class="date">
				September 6, 2012
			</span>
		</div>
	</div>

	<div class="comment">
		<?php
			$product = Product::model()->findByPk(52);
			$imgUrl = "";
			$imgAlt = "";
			$productUrl = "";
			
			if ($product->id)
			{
				$imgUrl = $product->getDefaultImage()->url;
				$imgAlt = $product->getProductImgAltDescription();
				$productUrl = $product->getUrl();
			}
			
			// Display the default image for this product
			$img = CHtml::image(
				Yii::app()->request->baseUrl . '/images/product-images/' . $imgUrl,
				$imgAlt,
				array('width'=>140, 'class' => 'img')
			);
		?>
		<div class='img_container'>
			<?php echo CHtml::link($img, $productUrl); ?>
		</div>
		<div class='text_container'>
			<p>
				Very Nice! Thank you!
			</p>
			
			<span class="source">
				Winsted, CT on
				<?php 
					echo CHtml::link(
						'Etsy',
						"http://www.etsy.com/people/susanperez3/feedback", 
						array(
							'target'=>'_blank',
							'rel' => "nofollow"
						)
					);
				?>
			</span>
			
			<span class="date">
				September 6, 2012
			</span>
		</div>
	</div>
	
	<div class="comment">
		<?php
			$product = Product::model()->findByPk(25);
			$imgUrl = "";
			$imgAlt = "";
			$productUrl = "";
			
			if ($product->id)
			{
				$imgUrl = $product->getDefaultImage()->url;
				$imgAlt = $product->getProductImgAltDescription();
				$productUrl = $product->getUrl();
			}
			
			// Display the default image for this product
			$img = CHtml::image(
				Yii::app()->request->baseUrl . '/images/product-images/' . $imgUrl,
				$imgAlt,
				array('width'=>140, 'class' => 'img')
			);
		?>
		<div class='img_container'>
			<?php echo CHtml::link($img, $productUrl); ?>
		</div>
		<div class='text_container'>
			<p>
				Great costume piece! so well made and really quick delivery!
			</p>
			
			<span class="source">
				Portland, OR on
				<?php 
					echo CHtml::link(
						'Etsy',
						"http://www.etsy.com/people/susanperez3/feedback", 
						array(
							'target'=>'_blank',
							'rel' => "nofollow"
						)
					);
				?>
			</span>
			
			<span class="date">
				August 9, 2012
			</span>
		</div>
	</div>


	<div class="comment">
		<?php
			$product = Product::model()->findByPk(38);
			$imgUrl = "";
			$imgAlt = "";
			$productUrl = "";
			
			if ($product->id)
			{
				$imgUrl = $product->getDefaultImage()->url;
				$imgAlt = $product->getProductImgAltDescription();
				$productUrl = $product->getUrl();
			}
			
			// Display the default image for this product
			$img = CHtml::image(
				Yii::app()->request->baseUrl . '/images/product-images/' . $imgUrl,
				$imgAlt,
				array('width'=>140, 'class' => 'img')
			);
		?>
		<div class='img_container'>
			<?php echo CHtml::link($img, $productUrl); ?>
		</div>
		<div class='text_container'>
			<p>
				Beautiful in person and the quality is great! ARRRRR THANK YOU!
			</p>
			
			<span class="source">
				Park Ridge, IL on
				<?php 
					echo CHtml::link(
						'Etsy',
						"http://www.etsy.com/people/susanperez3/feedback", 
						array(
							'target'=>'_blank',
							'rel' => "nofollow"
						)
					);
				?>
			</span>
			
			<span class="date">
				July 30, 2012
			</span>
		</div>
	</div>
	
	
	<div class="comment">
		<?php
			$product = Product::model()->findByPk(25);
			$imgUrl = "";
			$imgAlt = "";
			$productUrl = "";
			
			if ($product->id)
			{
				$imgUrl = $product->getDefaultImage()->url;
				$imgAlt = $product->getProductImgAltDescription();
				$productUrl = $product->getUrl();
			}
			
			// Display the default image for this product
			$img = CHtml::image(
				Yii::app()->request->baseUrl . '/images/product-images/' . $imgUrl,
				$imgAlt,
				array('width'=>140, 'class' => 'img')
			);
		?>
		<div class='img_container'>
			<?php echo CHtml::link($img, $productUrl); ?>
		</div>
		<div class='text_container'>
			<p>
				These fit perfectly and were so comfortable! The craftsmanship is spot on! 
				Thank you for the terrific product!	
			</p>
			
			<span class="source">
				Federal Way, WA on 
				<?php 
					echo CHtml::link(
						'Etsy',
						"http://www.etsy.com/people/susanperez3/feedback", 
						array(
							'target'=>'_blank',
							'rel' => "nofollow"
						)
					);
				?>
			</span>
			
			<span class="date">
				July 25, 2012
			</span>
		</div>
	</div>
	
	
	<div class="comment">
		<?php
			$product = Product::model()->findByPk(32);
			$imgUrl = "";
			$imgAlt = "";
			$productUrl = "";
			
			if ($product->id)
			{
				$imgUrl = $product->getDefaultImage()->url;
				$imgAlt = $product->getProductImgAltDescription();
				$productUrl = $product->getUrl();
			}
			
			// Display the default image for this product
			$img = CHtml::image(
				Yii::app()->request->baseUrl . '/images/product-images/' . $imgUrl,
				$imgAlt,
				array('width'=>140, 'class' => 'img')
			);
		?>
		<div class='img_container'>
			<?php echo CHtml::link($img, $productUrl); ?>
		</div>
		<div class='text_container'>
			<p>
				Love it!!! Thank you for the quick service & delivery!		
			</p>
			
			<span class="source">
				Riverside, CA on 
				<?php 
					echo CHtml::link(
						'Etsy',
						"http://www.etsy.com/people/susanperez3/feedback", 
						array(
							'target'=>'_blank',
							'rel' => "nofollow"
						)
					);
				?>
			</span>
			
			<span class="date">
				July 23, 2012
			</span>
		</div>
	</div>
	
	
	<div class="comment">
		<?php
			$product = Product::model()->findByPk(28);
			$imgUrl = "";
			$imgAlt = "";
			$productUrl = "";
			
			if ($product->id)
			{
				$imgUrl = $product->getDefaultImage()->url;
				$imgAlt = $product->getProductImgAltDescription();
				$productUrl = $product->getUrl();
			}
			
			// Display the default image for this product
			$img = CHtml::image(
				Yii::app()->request->baseUrl . '/images/product-images/' . $imgUrl,
				$imgAlt,
				array('width'=>140, 'class' => 'img')
			);
		?>
		<div class='img_container'>
			<?php echo CHtml::link($img, $productUrl); ?>
		</div>
		<div class='text_container'>
			<p>
				Absolutely exactly what I was hoping for. It looks great with all of my vests and ascots. Totally worth every penny.
			</p>
			
			<span class="source">
				Frederick, MD on 
				<?php 
					echo CHtml::link(
						'Etsy',
						"http://www.etsy.com/people/susanperez3/feedback", 
						array(
							'target'=>'_blank',
							'rel' => "nofollow"
						)
					);
				?>
			</span>
			
			<span class="date">
				June 30, 2012
			</span>
		</div>
	</div>
	
	
	<div class="comment">
		<?php
			$product = Product::model()->findByPk(38);
			$imgUrl = "";
			$imgAlt = "";
			$productUrl = "";
			
			if ($product->id)
			{
				$imgUrl = $product->getDefaultImage()->url;
				$imgAlt = $product->getProductImgAltDescription();
				$productUrl = $product->getUrl();
			}
			
			// Display the default image for this product
			$img = CHtml::image(
				Yii::app()->request->baseUrl . '/images/product-images/' . $imgUrl,
				$imgAlt,
				array('width'=>140, 'class' => 'img')
			);
		?>
		<div class='img_container'>
			<?php echo CHtml::link($img, $productUrl); ?>
		</div>
		<div class='text_container'>
			<p>
			Thank you so much! The coat is absolutely gorgeous, wonderfully made and I have been pretty much wearing it EVERYWHERE. ♥
			</p>
			
			<span class="source">
				Victoria, Australia on
				<?php 
					echo CHtml::link(
						'Etsy',
						"http://www.etsy.com/people/susanperez3/feedback", 
						array(
							'target'=>'_blank',
							'rel' => "nofollow"
						)
					);
				?>
			</span>
			
			<span class="date">
				June 8, 2012
			</span>
		</div>
	</div>
	
	
	<div class="comment">
		<?php
			$product = Product::model()->findByPk(38);
			$imgUrl = "";
			$imgAlt = "";
			$productUrl = "";
			
			if ($product->id)
			{
				$imgUrl = $product->getDefaultImage()->url;
				$imgAlt = $product->getProductImgAltDescription();
				$productUrl = $product->getUrl();
			}
			
			// Display the default image for this product
			$img = CHtml::image(
				Yii::app()->request->baseUrl . '/images/product-images/' . $imgUrl,
				$imgAlt,
				array('width'=>140, 'class' => 'img')
			);
		?>
		<div class='img_container'>
			<?php echo CHtml::link($img, $productUrl); ?>
		</div>
		<div class='text_container'>
			<p>
				This coat is absolutely beautiful! I had a very difficult time finding a traditional pirate-style coat to fit a woman. Susan's design takes the feminine form into account and creates a fit and drape that are just right. I can't say enough good things! Thank you!
			</p>
			
			<span class="source">
				Williamston, MI on
				<?php 
					echo CHtml::link(
						'Etsy',
						"http://www.etsy.com/people/susanperez3/feedback", 
						array(
							'target'=>'_blank',
							'rel' => "nofollow"
						)
					);
				?>
			</span>
			
			<span class="date">
				May 29, 2012
			</span>
		</div>
	</div>
	
</div>








		
	
	
	
	