<?php include( PLUGIN_PATH . '/header.php' ); ?>

<div class="style-guide-body">
    <div class="style-guide-content">
        <div class="tdsg-section tdsg-section--typography" id="typography" data-title="Typography">
            <div class="wrap">
                <h2 class="tdsg-section__heading">Typography</h2>
                <div class="grid">
                    <div class="grid__item grid__item--half">
                        <h3 class="tdsg-section__label">Heading 1 <code>h1</code></h3>
                        <h1>Heading 1</h1>
                        <h3 class="tdsg-section__label">Heading 2 <code>h2</code></h3>
                        <h2>Heading 2</h2>
                        <h3 class="tdsg-section__label">Heading 3 <code>h3</code></h3>
                        <h3>Heading 3</h3>
                        <h3 class="tdsg-section__label">Heading 4 <code>h4</code></h3>
                        <h4>Heading 4</h4>
                        <h3 class="tdsg-section__label">Heading 5 <code>h5</code></h3>
                        <h5>Heading 5</h5>
                        <h3 class="tdsg-section__label">Heading 6 <code>h6</code></h3>
                        <h6>Heading 6</h6>
                    </div>
                    <div class="grid__item grid__item--half">
                        <h3 class="tdsg-section__label">Body</h3>
                        <div class="wysiwyg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Donec rhoncus enim eu</strong> aliquam viverra. Duis et neque magna. Aenean at ornare erat. Nullam ut aliquet nunc, ac congue eros. Nullam eget interdum nibh.</p>
                            <p>Quisque non bibendum urna. Donec bibendum augue ac aliquam mollis. Ut metus velit, lobortis eu hendrerit nec, blandit eu magna. Aliquam at pharetra nisl. Nullam efficitur, sapien id semper imperdiet, <i>neque quam malesuada arcu</i>, at posuere nunc tortor eget ante.</p>
                        </div>
                        <div class="space"></div>
                        <h3 class="tdsg-section__label">Misc</h3>
                        2,500m<sup>2</sup><br>
                        H<sub>2</sub>0
	                </div>
	            </div>
	            <div class="space"></div>
                <h3 class="tdsg-section__label">Blockquote <code>blockquote</code></h3>
                <div class="blockquote">
                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus enim eu aliquam viverra. Duis et neque magna. Aenean at ornare erat. Nullam ut aliquet nunc, ac congue eros. Nullam eget interdum nibh.</blockquote>
                </div>
                <div class="space"></div>
                <div class="wysiwyg">
                    <div class="grid">
                        <div class="grid__item grid__item--half">
                            <h3 class="tdsg-section__label">Unordered List <code>.wysiwyg ul</code></h3>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>
                        </div>
                        <div class="grid__item grid__item--half">
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
            </div>
        </div>
        <!-- /TYPOGRAPHY -->
        <!-- LINKS -->
        <div class="tdsg-section tdsg-section--links" id="links" data-title="Links">
            <div class="wrap">
                <h2 class="tdsg-section__heading">Links</h2>
                <h3 class="tdsg-section__label">Text Link <code>.link--text</code></h3>
                <small>Styling will automatically be applied to all links inside a <code>.wysiwyg</code> class</small>
                <div class="space"></div>
                <div class="wysiwyg">
                    <p>Lorem <a href="#" class="link--text">ipsum</a> dolor sit amet</p>
                </div>
                <div class="space"></div>
                <div class="grid">
                    <div class="grid__item grid__item--half">
                        <h3 class="tdsg-section__label">Button <code>.button</code></h3>
                        <div style="padding: 2em; border: 1px solid #ccc;">
                            <a href="#" class="button">Button Text</a>
                        </div>
                    </div>
                    <div class="grid__item grid__item--half">
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
            <div class="wrap">

                <h2 class="tdsg-section__heading">Navigation</h2>
                
                <h3 class="tdsg-section__label">Primary Navigation <code>.nav--primary</code></h3>
                <?php $args = array(
					'container'      => 'false',
					'menu_class'     => 'nav nav--primary',
					'theme_location' => 'menu-header',
				); ?>
                
                <?php wp_nav_menu( $args ); ?>    
                                
                <div class="space"></div>
                
                <h3 class="tdsg-section__label">Secondary Navigation <code>.nav--secondary</code></h3>                
                <?php $args = array(
					'container'      => 'false',
				    'menu_class'     => 'nav nav--secondary',
				    'theme_location' => 'menu-footer'
				); ?>
                
                <?php wp_nav_menu( $args ); ?>
                                
                <div class="space"></div>
                
                <h3 class="tdsg-section__label">Hamburger <code>.hamburger</code></h3>
                <div class="grid">
                    <div class="grid__item grid__item--half">
                        <div style="position: relative; padding: 5em; border: 1px solid #ccc;">
                            <?php td_display_hamburger(); ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="tdsg-section tdsg-section--form gform_wrapper" id="forms" data-title="Forms">
            <div class="wrap">
                <h2 class="tdsg-section__heading">Forms</h2>

                <h3 class="tdsg-section__label">Text Input with label</h3>

                <div class="grid">
                    <div class="grid__item grid__item--half">
                        <form>
                            <label for="" class="gfield_label">Field Label</label>
                            <input type="text">
                        </form>
                    </div>
                    <div class="grid__item grid__item--half">
                        <form>
                            <div class="gfield_error gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                <label for="" class="gfield_label">Field Label</label>
                                <input type="text">
                                <div id="validation_message_1_6" class="gfield_description validation_message" aria-live="polite">This field is required.</div>
                            </div>                            
                        </form>
                    </div>
                </div>                
                
                <div class="space"></div>
        
                <h3 class="tdsg-section__label">Text Input with placeholder</h3>
                
                <div class="grid">
                    <div class="grid__item grid__item--half">
                        <form class="hidden_label">
                            <label for="" class="gfield_label">Field Label</label>
                            <input type="text" placeholder="Field Label">
                        </form>
                    </div>
                    <div class="grid__item grid__item--half">
                        <form class="hidden_label">
                            <div class="gfield_error gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                <label for="" class="gfield_label">Field Label</label>
                                <input type="text" placeholder="Field Label">
                                <div id="validation_message_1_6" class="gfield_description validation_message" aria-live="polite">This field is required.</div>
                            </div>
                        </form>
                    </div>
                </div>                                   

                <div class="space"></div>              

                <h3 class="tdsg-section__label">Textarea</h3>

                
                <div class="grid">
                    <div class="grid__item grid__item--half">
                        <form action="">
                            <textarea name="" id="" placeholder="Textarea"></textarea>
                        </form>
                    </div>
                    <div class="grid__item grid__item--half">
                        <form action="">
                            <div class="gfield_error gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                <textarea name="" id="" placeholder="Textarea"></textarea>
                                <div id="validation_message_1_6" class="gfield_description validation_message" aria-live="polite">This field is required.</div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="space"></div>

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
         
                
                <div class="space"></div>

                <h3 class="tdsg-section__label">Checkbox</h3>
                <form class="hidden_label">
                    <label for="" class="gfield_label">Field Label</label>
                    <div class="ginput_container ginput_container_checkbox">
                        <ul class="gfield_checkbox" id="input_1_28">
                            <li class="gchoice_1_28_1">
                                <input name="input_28.1" type="checkbox" value="First Choice" id="choice_1_28_1">
                                <label for="choice_1_28_1" id="label_1_28_1"><span class="custom-input custom-input--checkbox"></span>First Choice</label>
                            </li>
                            <li class="gchoice_1_28_2">
                                <input name="input_28.2" type="checkbox" value="Second Choice" id="choice_1_28_2">
                                <label for="choice_1_28_2" id="label_1_28_2"><span class="custom-input custom-input--checkbox"></span>Second Choice</label>
                            </li>
                            <li class="gchoice_1_28_3">
                                <input name="input_28.3" type="checkbox" value="Third Choice" id="choice_1_28_3">
                                <label for="choice_1_28_3" id="label_1_28_3"><span class="custom-input custom-input--checkbox"></span>Third Choice</label>
                            </li>
                        </ul>
                    </div>
                </form>

                <div class="space"></div>

                <h3 class="tdsg-section__label">Radio Button</h3>
                <form class="hidden_label">
                    <label for="" class="gfield_label">Field Label</label>
                    <div class="ginput_container ginput_container_radio">
                        <ul class="gfield_radio" id="input_1_30">
                            <li class="gchoice_1_30_0">
                                <input name="input_30" type="radio" value="First Choice" id="choice_1_30_0">
                                <label for="choice_1_30_0" id="label_1_30_0"><span class="custom-input custom-input--radio"></span>First Choice</label>
                            </li>
                            <li class="gchoice_1_30_1">
                                <input name="input_30" type="radio" value="Second Choice" id="choice_1_30_1">
                                <label for="choice_1_30_1" id="label_1_30_1"><span class="custom-input custom-input--radio"></span>Second Choice</label>
                            </li>
                            <li class="gchoice_1_30_2">
                                <input name="input_30" type="radio" value="Third Choice" id="choice_1_30_2">
                                <label for="choice_1_30_2" id="label_1_30_2"><span class="custom-input custom-input--radio"></span>Third Choice</label>
                            </li>
                        </ul>
                    </div>
                </form>

                <div class="space"></div>

                <h3 class="tdsg-section__label">Error Message</h3>
                <div class="validation_error">There was a problem with your submission. Errors have been highlighted below.</div>

                <div class="space"></div>

                <h3 class="tdsg-section__label">Confirmation Message</h3>
                <div class="gform_confirmation_message">Thank you for your submission.</div>

                <div class="space"></div>

                <h3 class="tdsg-section__label">Submit Button</h3>
                <form action="">
                    <button class="gform_submit" type="submit">Submit</button>    
                </form>

                <div class="space"></div>

                <h3 class="tdsg-section__label">Spinner</h3>
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" class="gform_ajax_spinner" />
                
                <div class="space"></div>
                
                <h3 class="tdsg-section__label">Search Form</h3>
                <?php echo get_search_form(); ?>

                </div>
            </div>
        </div>
        <div class="tdsg-section tdsg-section--elements" id="elements" data-title="Elements">
            <div class="wrap">
                <h2 class="tdsg-section__heading">Elements</h2>
                <h3 class="tdsg-section__label">Horizontal Rule <code>&lt;hr&gt;</code></h3>
                <hr>
                <div class="space"></div>
                <h3 class="tdsg-section__label">Loading Spinner <code>.spinner</code></h3>
                <div class="bg--default" style="padding: 100px; position: relative;">
                    <div class="spinner"></div>
                </div>
                <div class="space"></div>
                <h3 class="tdsg-section__label">Popup</h3>
                <a href="#tdsg-popup" class="button js-magnific-popup">Open popup</a>
                <div id="tdsg-popup" class="popup mfp-hide">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et blanditiis, suscipit veniam molestiae sunt perferendis ipsam cumque, porro provident nulla vero ea tempora temporibus itaque! Obcaecati ducimus repellendus aspernatur debitis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui inventore animi, repellat ipsa perspiciatis libero provident voluptates corporis natus quaerat itaque reiciendis, veritatis. In non nostrum aperiam ab? Dolor, ut.
                </div>

                <div class="space"></div>
                
                <h3 class="tdsg-section__label">Accordion</h3>
                
                <div class="accordion">
                    <div class="accordion__item">
                        <h4 class="accordion__item__heading js-accordion-toggle" data-target="accordion-01">Accordion heading <i class="fas fa-chevron-down"></i></h4>
                        <div class="accordion__item__content" id="accordion-01">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus suscipit minima dolorem. Eligendi, velit ea, facere ex veniam, iure quae dolores perspiciatis quam delectus illum sunt maxime. Maxime aspernatur, ea! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt error dolores ad sit asperiores eveniet ea. Vero omnis voluptates, quos cum consequuntur sapiente cupiditate nesciunt suscipit eveniet. Sequi, tenetur, soluta.</p>
                        </div>
                    </div>
                    <div class="accordion__item">
                        <h4 class="accordion__item__heading js-accordion-toggle" data-target="accordion-02">Accordion heading <i class="fas fa-chevron-down"></i></h4>
                        <div class="accordion__item__content" id="accordion-02">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus suscipit minima dolorem. Eligendi, velit ea, facere ex veniam, iure quae dolores perspiciatis quam delectus illum sunt maxime. Maxime aspernatur, ea! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt error dolores ad sit asperiores eveniet ea. Vero omnis voluptates, quos cum consequuntur sapiente cupiditate nesciunt suscipit eveniet. Sequi, tenetur, soluta.</p>
                        </div>
                    </div>
                </div>
                
                <div class="space"></div>
                
                <h3 class="tdsg-section__label">Favicon</h3>
                
                <ul class="tdsg-list--icon">
                    <li><img src="<?php echo get_stylesheet_directory_uri();?>/images/apple/favicon.png" /></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri();?>/images/apple/favicon@2x.png" /></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri();?>/images/apple/apple-touch-icon.png" /></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri();?>/images/apple/apple-touch-icon-57x57.png" /></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri();?>/images/apple/apple-touch-icon-72x72.png" /></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri();?>/images/apple/apple-touch-icon-76x76.png" /></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri();?>/images/apple/apple-touch-icon-114x114.png" /></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri();?>/images/apple/apple-touch-icon-120x120.png" /></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri();?>/images/apple/apple-touch-icon-144x144.png" /></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri();?>/images/apple/apple-touch-icon-152x152.png" /></li>
                </ul>

                <div class="space"></div>

                <h3 class="tdsg-section__label">Default Open Graph Image</h3>
                <?php
                    $yoast_social = get_option('wpseo_social');                     
                    $og_image = $yoast_social['og_default_image'];
                    echo '<img src="' . $og_image . '" />'; 
                ?>

            </div>
        </div>
        <div class="tdsg-section" id="spacing" data-title="Spacing and Layout">
            <style>
                #spacing .grid-spacer {
                    background-color: #eee;
                    padding: 100px 0;
                    text-align: center;
                }
                #spacing .spacer {
                    background-color: #eee;
                    /*height: 100px;*/
                    margin-bottom: 24px;
                }
            </style>
            <div class="wrap">
                <h2 class="tdsg-section__heading">Spacing</h2>
                <div class="wysiwyg">
                    <ul>
                        <li>Spacing can be applied as margin, padding or height using the variables in <strong>sass/spacing.scss</strong> eg <code>padding-bottom: $space-s;</code></li>
                        <li>You can also use a spacing element eg <code>&lt;div class="spacer spacer--s"&gt;&lt;/div&gt;</code></li>
                    </ul>
                </div>
                <h3 class="tdsg-section__label">Small <code>$space-s</code></h3>
                <div class="spacer spacer--s"></div>
                <h3 class="tdsg-section__label">Medium <code>$space-m</code></h3>
                <div class="spacer spacer--m"></div>
                <h3 class="tdsg-section__label">Large <code>$space-l</code></h3>
                <div class="spacer spacer--l"></div>
            </div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="wrap">
                <h2 class="tdsg-section__heading">Wrap</h2>
                <h3 class="tdsg-section__label">Small Wrap <code>.wrap.wrap--small</code></h3>
            </div>

            <div class="wrap wrap--small" style="background: #eee; height: 200px"></div>

            <div class="space"></div>

            <div class="wrap">
                
                <h3 class="tdsg-section__label">Default Wrap <code>.wrap</code></h3>
            </div>

            <div class="wrap" style="background: #eee; height: 200px"></div>

            

            <div class="space"></div>

            <div class="wrap">
            <h3 class="tdsg-section__label">Large Wrap <code>.wrap.wrap--large</code></h3>
            </div>

            <div class="wrap wrap--large" style="background: #eee; height: 200px"></div>

            <div class="space"></div>
            <div class="space"></div>

            <div class="wrap">
                <h2 class="tdsg-section__heading">Grid</h2>
                <div class="wysiwyg">
                <ul>
                    <li>Columns are set up in <strong>sass/helper.scss</strong></li>
                    <li>There's a mixin <strong>@include grid-spacing(24px,24px)</strong> to adjust left and bottom padding</li>
                </ul>
                </div>
                
                
                <h3 class="tdsg-section__label">Two Column <code>.grid__item.grid__item--half</code></h3>                
                <div class="grid">
                    <div class="grid__item grid__item--half"><div class="grid-spacer"></div></div>
                    <div class="grid__item grid__item--half"><div class="grid-spacer"></div></div>
                </div>
                <div class="space"></div>
                <h3 class="tdsg-section__label">Three Column <code>.grid__item.grid__item--third</code></h3>                
                <div class="grid">
                    <div class="grid__item grid__item--third"><div class="grid-spacer"></div></div>
                    <div class="grid__item grid__item--third"><div class="grid-spacer"></div></div>
                    <div class="grid__item grid__item--third"><div class="grid-spacer"></div></div>
                </div>
                <div class="space"></div>
                <h3 class="tdsg-section__label">Four Column <code>.grid__item.grid__item--fourth</code></h3>                
                <div class="grid">
                    <div class="grid__item grid__item--fourth"><div class="grid-spacer"></div></div>
                    <div class="grid__item grid__item--fourth"><div class="grid-spacer"></div></div>
                    <div class="grid__item grid__item--fourth"><div class="grid-spacer"></div></div>
                    <div class="grid__item grid__item--fourth"><div class="grid-spacer"></div></div>
                </div>
                <div class="space"></div>
                <h3 class="tdsg-section__label">Five Column <code>.grid__item.grid__item--fifth</code></h3>                
                <div class="grid">
                    <div class="grid__item grid__item--fifth"><div class="grid-spacer"></div></div>
                    <div class="grid__item grid__item--fifth"><div class="grid-spacer"></div></div>
                    <div class="grid__item grid__item--fifth"><div class="grid-spacer"></div></div>
                    <div class="grid__item grid__item--fifth"><div class="grid-spacer"></div></div>
                    <div class="grid__item grid__item--fifth"><div class="grid-spacer"></div></div>
                </div>
                <div class="space"></div>
                <h3 class="tdsg-section__label">Six Column <code>.grid__item.grid__item--sixth</code></h3>                
                <div class="grid">
                    <div class="grid__item grid__item--sixth"><div class="grid-spacer"></div></div>
                    <div class="grid__item grid__item--sixth"><div class="grid-spacer"></div></div>
                    <div class="grid__item grid__item--sixth"><div class="grid-spacer"></div></div>
                    <div class="grid__item grid__item--sixth"><div class="grid-spacer"></div></div>
                    <div class="grid__item grid__item--sixth"><div class="grid-spacer"></div></div>
                    <div class="grid__item grid__item--sixth"><div class="grid-spacer"></div></div>
                </div>
            </div>
        </div>
        <div class="tdsg-section" id="colours" data-title="Colours">
        	<div class="wrap">
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
        	</div>
        </div>
    </div><!-- /style-guide-body -->
</div>

<?php include( PLUGIN_PATH . '/footer.php' ); ?>