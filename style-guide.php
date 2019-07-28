<?php include( PLUGIN_PATH . '/header.php' ); ?>

<div class="style-guide-body">
    <div class="style-guide-content">
        <div class="tdsg-section tdsg-section--typography" id="typography" data-title="Typography">
            <div class="tdsg-wrap">
                <h2 class="tdsg-section__heading">Typography</h2>
                <div class="tdsg-grid">
                    <div class="tdsg-grid__item tdsg-grid__item--half">
                        <h3 class="tdsg-section__label">Heading 1 <code>h1</code></h3>
                        <h1 class="js-tdsg-typography">Heading 1</h1>
                        <h3 class="tdsg-section__label">Heading 2 <code>h2</code></h3>
                        <h2 class="js-tdsg-typography">Heading 2</h2>
                        <h3 class="tdsg-section__label">Heading 3 <code>h3</code></h3>
                        <h3 class="js-tdsg-typography">Heading 3</h3>
                        <h3 class="tdsg-section__label">Heading 4 <code>h4</code></h3>
                        <h4 class="js-tdsg-typography">Heading 4</h4>
                        <h3 class="tdsg-section__label">Heading 5 <code>h5</code></h3>
                        <h5 class="js-tdsg-typography">Heading 5</h5>
                        <h3 class="tdsg-section__label">Heading 6 <code>h6</code></h3>
                        <h6 class="js-tdsg-typography">Heading 6</h6>
                    </div>
                    <div class="tdsg-grid__item tdsg-grid__item--half">
                        <h3 class="tdsg-section__label">Body</h3>
                        <div class="wysiwyg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus enim eu aliquam viverra. Duis et neque magna. Aenean at ornare erat. Nullam ut aliquet nunc, ac congue eros. Nullam eget interdum nibh.</p>
                            <p>Quisque non bibendum urna. Donec bibendum augue ac aliquam mollis. Ut metus velit, lobortis eu hendrerit nec, blandit eu magna. Aliquam at pharetra nisl. Nullam efficitur, sapien id semper imperdiet, neque quam malesuada arcu, at posuere nunc tortor eget ante.</p>
                        </div>
                        <h3 class="tdsg-section__label">Body &mdash; Small</h3>
                        <div class="wysiwyg wysiwyg--small">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus enim eu aliquam viverra. Duis et neque magna. Aenean at ornare erat. Nullam ut aliquet nunc, ac congue eros. Nullam eget interdum nibh.</p>
                            <p>Quisque non bibendum urna. Donec bibendum augue ac aliquam mollis. Ut metus velit, lobortis eu hendrerit nec, blandit eu magna. Aliquam at pharetra nisl. Nullam efficitur, sapien id semper imperdiet, neque quam malesuada arcu, at posuere nunc tortor eget ante.</p>
                        </div>
	                </div>
	            </div>
	            <div class="space"></div>
                <h3 class="tdsg-section__label">Blockquote <code>blockquote</code></h3>
                <div class="blockquote">
                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus enim eu aliquam viverra. Duis et neque magna. Aenean at ornare erat. Nullam ut aliquet nunc, ac congue eros. Nullam eget interdum nibh.</blockquote>
                </div>
                <div class="space"></div>
                <div class="wysiwyg">
                    <div class="tdsg-grid">
                        <div class="tdsg-grid__item tdsg-grid__item--half">
                            <h3 class="tdsg-section__label">Unordered List <code>.wysiwyg ul</code></h3>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>
                        </div>
                        <div class="tdsg-grid__item tdsg-grid__item--half">
                            <h3 class="tdsg-section__label">Ordered List <code>.wysiwyg ol</code></h3>
                            <ol>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
                <h3 class="tdsg-section__label">Horizontal Rule <code>&lt;hr&gt;</code></h3>
                <hr>
            </div>
        </div>
        <!-- /TYPOGRAPHY -->
        <!-- LINKS -->
        <div class="tdsg-section tdsg-section--links" id="links" data-title="Links">
            <div class="tdsg-wrap">
                <h2 class="tdsg-section__heading">Links</h2>
                <div class="tdsg-grid">
                    <div class="tdsg-grid__item tdsg-grid__item--half">
                        <h3 class="tdsg-section__label">Button <code>.button</code></h3>
                        <div style="padding: 2em; border: 1px solid #ccc;">
                            <a href="#" class="button">Button Text</a>
                        </div>
                    </div>
                    <div class="tdsg-grid__item tdsg-grid__item--half">
                        <h3 class="tdsg-section__label">Button Light <code>.button--light</code></h3>
                        <div style="padding: 2em;" class="bg--primary">
                            <a href="#" class="button button--light">Button Text</a>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
                <div class="tdsg-grid">
                    <div class="tdsg-grid__item tdsg-grid__item--half">
                        <h3 class="tdsg-section__label">Button Alt<code>.button--alt</code></h3>
                        <div style="padding: 2em; border: 1px solid #ccc;">
                            <a href="#" class="button button--alt">Button Text</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LINKS -->
        <div class="tdsg-section tdsg-section--nav" id="navigation" data-title="Navigation">
            <div class="tdsg-wrap">
                <h2 class="tdsg-section__heading">Navigation</h2>
                <h3 class="tdsg-section__label">Primary Navigation <code>.nav--primary</code></h3>
                <?php $args = array(
					'container'      => 'false',
					'menu_class'     => 'nav nav--primary',
					'theme_location' => 'menu-header',
					'link_before'    => '<span>',
					'link_after'     => '</span>'
				); ?>
                <?php wp_nav_menu( $args ); ?>
                <div class="space"></div>
                <h3 class="tdsg-section__label">Secondary Navigation <code>.nav--secondary</code></h3>
                <div class="block bg--primary">
                    <?php $args = array(
					'container'      => 'false',
				    'menu_class'     => 'nav nav--secondary',
				    'theme_location' => 'menu-footer-secondary'
				); ?>
                    <?php wp_nav_menu( $args ); ?>
                </div>
                <div class="space"></div>
                <h3 class="tdsg-section__label">Hamburger <code>.hamburger</code></h3>
                <div class="tdsg-grid">
                    <div class="tdsg-grid__item tdsg-grid__item--half">
                        <div style="position: relative; padding: 5em; border: 1px solid #ccc;">
                            <?php td_display_hamburger(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tdsg-section tdsg-section--form gform_wrapper" id="forms" data-title="Forms">
            <div class="tdsg-wrap">
                <h2 class="tdsg-section__heading">Forms</h2>
                <div class="tdsg-grid">
                    <div class="tdsg-grid__item tdsg-grid__item--half">
                        <h3 class="tdsg-section__label">Text Input</h3>                        
                        <form class="hidden_label">
                            <label for="" class="gfield_label">Field Label</label>
                            <input type="text" placeholder="Field placeholder">
                        </form>                        
                    </div>
                    <div class="tdsg-grid__item tdsg-grid__item--half">
                        <h3 class="tdsg-section__label">Select</h3>
                       <form class="hidden_label gform_wrapper">
                           <div class="ginput_container_select">
                               <label for="" class="gfield_label">Field Label</label>
                               <select>
                                   <option value="Sort by">Sort by</option>
                                   <option value="Featured">Featured</option>
                                   <option value="Newest">Newest</option>
                                   <option value="Popularity">Popularity</option>
                                   <option value="Price">Price</option>
                                   <option value="A - Z">A - Z</option>
                                   <option value="Sort by">Sort by</option>
                                   <option value="Featured">Featured</option>
                                   <option value="Newest">Newest</option>
                                   <option value="Popularity">Popularity</option>
                                   <option value="Price">Price</option>
                                   <option value="A - Z">A - Z</option>
                               </select>
                           </div>
                       </form>
                    </div>
                </div>
                <div class="space"></div>
                <h3 class="tdsg-section__label">Textarea</h3>
                <form action="" class="hidden_label">
                	<div class="ginput_container ginput_container_textarea">
                		<textarea name="input_7" id="input_1_7" class="textarea medium" aria-invalid="false" rows="10" cols="50"></textarea>
                	</div>
                </form>
                <div class="space"></div>
                <div class="tdsg-grid">
                    <div class="tdsg-grid__item tdsg-grid__item--half">
                        <h3 class="tdsg-section__label">Checkbox</h3>                        
                        <form class="hidden_label">
                            <label for="" class="gfield_label">Field Label</label>
                            <div class="ginput_container ginput_container_checkbox">
                                <ul class="gfield_checkbox" id="input_1_28">
                                    <li class="gchoice_1_28_1">
                                        <input name="input_28.1" type="checkbox" value="First Choice" id="choice_1_28_1">
                                        <label for="choice_1_28_1" id="label_1_28_1"><span class="custom-checkbox"></span>First Choice</label>
                                    </li>
                                    <li class="gchoice_1_28_2">
                                        <input name="input_28.2" type="checkbox" value="Second Choice" id="choice_1_28_2">
                                        <label for="choice_1_28_2" id="label_1_28_2"><span class="custom-checkbox"></span>Second Choice</label>
                                    </li>
                                    <li class="gchoice_1_28_3">
                                        <input name="input_28.3" type="checkbox" value="Third Choice" id="choice_1_28_3">
                                        <label for="choice_1_28_3" id="label_1_28_3"><span class="custom-checkbox"></span>Third Choice</label>
                                    </li>
                                </ul>
                            </div>
                        </form>                        
                    </div>
                    <div class="tdsg-grid__item tdsg-grid__item--half">
                        <h3 class="tdsg-section__label">Radio Button</h3>                        
                        <form class="hidden_label">
                            <label for="" class="gfield_label">Field Label</label>
                            <div class="ginput_container ginput_container_radio">
                                <ul class="gfield_radio" id="input_1_30">
                                    <li class="gchoice_1_30_0">
                                        <input name="input_30" type="radio" value="First Choice" id="choice_1_30_0">
                                        <label for="choice_1_30_0" id="label_1_30_0"><span class="custom-radio"></span>First Choice</label>
                                    </li>
                                    <li class="gchoice_1_30_1">
                                        <input name="input_30" type="radio" value="Second Choice" id="choice_1_30_1">
                                        <label for="choice_1_30_1" id="label_1_30_1"><span class="custom-radio"></span>Second Choice</label>
                                    </li>
                                    <li class="gchoice_1_30_2">
                                        <input name="input_30" type="radio" value="Third Choice" id="choice_1_30_2">
                                        <label for="choice_1_30_2" id="label_1_30_2"><span class="custom-radio"></span>Third Choice</label>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
                <?php //include( PLUGIN_PATH . '/inc/form.php' ); ?>
            </div>
        </div>
        <div class="tdsg-section tdsg-section--elements" id="elements" data-title="Elements">
            <div class="tdsg-wrap">
                <h2 class="tdsg-section__heading">Elements</h2>
            </div>
        </div>
        <div class="tdsg-section" id="colours" data-title="Colours">
        	<div class="tdsg-wrap">
        		<h2 class="tdsg-section__heading">Colours</h2>
        		<ul class="tdsg-palette">
        			<li>
        				<div class="tdsg-palette__item bg--white"></div>
        			</li>
        			<li>
        				<div class="tdsg-palette__item bg--dark"></div>
        			</li>
        			<li>
        				<div class="tdsg-palette__item bg--light"></div>
        			</li>
        			<li>
        				<div class="tdsg-palette__item bg--default"></div>
        			</li>
        			<li>
        				<div class="tdsg-palette__item bg--primary"></div>
        			</li>
        			<li>
        				<div class="tdsg-palette__item bg--secondary"></div>
        			</li>
        			<li>
        				<div class="tdsg-palette__item bg--error"></div>
        			</li>
        		</ul>
                <h2 class="tdsg-section__heading">Gradients</h2>
                
        	</div>
        </div>
    </div><!-- /style-guide-body -->
</div>
<div class="style-guide-tdsg-grid"></div>

<?php include( PLUGIN_PATH . '/footer.php' ); ?>