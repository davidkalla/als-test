<?php
	$title = 'Article';
	$pageClass = 'page-article';
	get_header();
?>
  
  <div class="top page-top">
    <div class="container">
      <a href="<?php echo home_url(); ?>" id="logo">
    	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="AutoLoanSaver.com" />
    	</a>
      
      <div id="main-content">
          <div class="form-std">

						<h1>H1 Title</h1>
            <h2>H2 Title</h2>
            <h3>H3 Title</h2>
            <h4>H3 Title</h4>
						<pre>&lt;h1&gt;H1 Title&lt;/h1&gt;<br />
&lt;h2&gt;H2 Title&lt;/h2&gt;<br />
&lt;h3&gt;H3 Title&lt;/h2&gt;<br />
&lt;h4&gt;H3 Title&lt;/h4&gt;</pre>
						<hr />



						<div class="margin"><strong>image</strong></div>
						<div class="img">
							<img src="./assets/img/car.jpg" />
						</div>
            <br />
						<pre>&lt;div class="img"&gt;
	&lt;img src="./assets/img/car.jpg" /&gt;
&lt;/div&gt;</pre>
						<hr />


						<div class="margin"><strong>.form-elements holder for select and input with label on left side</strong></div>
						<div class="form-elements">  
                <div class="inp-row">
    							<label for="input-id" class="inp-label">Label</label>
    							<div class="inp-fix">
    								<input type="text" id="input-id" class="inp-text input" />
    							</div>
    						</div>
    						<div class="inp-row">  
    						  <select id="input-select" class="inp-select">
    								<option value="0">Default value</option>
    							</select>
    						</div>
                <div class="inp-row">   
      						<span class="inp-fix inp-radio">
        						<label for="yes">Yes</label> <input type="radio" name="leased_car" id="yes" value="yes">&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="no">No</label> <input type="radio" name="leased_car" id="no" value="no">
      						</span>
      					</div>
                
                <div class="inp-row no-overflow">   
                  <label class="inp-label" title="Average daily commute"><span>Label <span class="help">?<span>Helping text</span></span></span></span></label>
                  <div class="clear"></div>
      					</div>
                
                <div class="inp-row">   
                  <div class="error"><b>Error message:</b> This field is required</div>
      					</div>
                <br />
                <button class="submit" type="submit">Go!</button>
                <div class="clear"></div>
                <span class="btn btn-secondary" style="cursor:pointer;"><span>Add another incident</span></span>

            </div>
            
						<pre><p>&lt;div class=&quot;form-elements&quot;&gt; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
&nbsp; &lt;div class=&quot;inp-row&quot;&gt; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp; &nbsp; &lt;label for=&quot;input-id&quot; class=&quot;inp-label&quot;&gt;Label<br />
&nbsp; &nbsp; &lt;/label&gt; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp; &nbsp; &lt;div class=&quot;inp-fix&quot;&gt; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp; &nbsp; &nbsp; &lt;input type=&quot;text&quot; id=&quot;input-id&quot; class=&quot;inp-text input&quot; /&gt; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp; &nbsp; &lt;/div&gt; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp; &lt;/div&gt; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp; &lt;div class=&quot;inp-row&quot;&gt; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
&nbsp; &nbsp; &lt;select id=&quot;input-select&quot; class=&quot;inp-select&quot;&gt; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp; &nbsp; &nbsp; &lt;option value=&quot;0&quot;&gt;Default value<br />
&nbsp; &nbsp; &nbsp; &lt;/option&gt; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp; &nbsp; &lt;/select&gt; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp; &lt;/div&gt; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
&nbsp; &lt;div class=&quot;inp-row&quot;&gt; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp; &nbsp; &lt;span class=&quot;inp-fix inp-radio&quot;&gt; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp; &nbsp; &nbsp; &lt;label for=&quot;yes&quot;&gt;Yes<br />
&nbsp; &nbsp; &nbsp; &lt;/label&gt;&nbsp;<br />
&nbsp; &nbsp; &nbsp; &lt;input type=&quot;radio&quot; name=&quot;leased_car&quot; id=&quot;yes&quot; value=&quot;yes&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
&nbsp; &nbsp; &nbsp; &lt;label for=&quot;no&quot;&gt;No<br />
&nbsp; &nbsp; &nbsp; &lt;/label&gt;&nbsp;<br />
&nbsp; &nbsp; &nbsp; &lt;input type=&quot;radio&quot; name=&quot;leased_car&quot; id=&quot;no&quot; value=&quot;no&quot;&gt; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp; &nbsp; &lt;/span&gt; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp; &lt;/div&gt; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
&nbsp; &lt;div class=&quot;inp-row no-overflow&quot;&gt; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
&nbsp; &nbsp; &lt;label class=&quot;inp-label&quot; title=&quot;Average daily commute&quot;&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;span&gt;Label&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &lt;span class=&quot;help&quot;&gt;?<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;span&gt;Helping text<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/span&gt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &lt;/span&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;/span&gt;<br />
&nbsp; &nbsp; &nbsp; &lt;/span&gt;<br />
&nbsp; &nbsp; &lt;/label&gt; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
&nbsp; &nbsp; &lt;div class=&quot;clear&quot;&gt;<br />
&nbsp; &nbsp; &lt;/div&gt; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp; &lt;/div&gt; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
&nbsp; &lt;div class=&quot;inp-row&quot;&gt; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
&nbsp; &nbsp; &lt;div class=&quot;error&quot;&gt;&lt;b&gt;Error message:&lt;/b&gt; This field is required<br />
&nbsp; &nbsp; &lt;/div&gt; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp; &lt;/div&gt; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;br /&gt; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
&nbsp; &lt;button class=&quot;submit&quot; type=&quot;submit&quot;&gt;Go!<br />
&nbsp; &lt;/button&gt; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
&nbsp; &lt;div class=&quot;clear&quot;&gt;<br />
&nbsp; &lt;/div&gt; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
&nbsp; &lt;span class=&quot;btn btn-secondary&quot; style=&quot;cursor:pointer;&quot;&gt;<br />
&nbsp; &nbsp; &lt;span&gt;Add another incident<br />
&nbsp; &nbsp; &lt;/span&gt;<br />
&nbsp; &lt;/span&gt; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
&lt;/div&gt;</p>
</pre>
						<hr />


						<div class="margin"><strong>checkbox/radio class</strong></div>
						<div class="margin">
								<input id="ch1" type="checkbox" />&nbsp;<label for="ch1">Checkbox</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="ch2" type="checkbox" />&nbsp;<label for="ch2">Checkbox</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="ch3" type="checkbox" />&nbsp;<label for="ch3">Checkbox</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="ch4" type="checkbox" />&nbsp;<label for="ch4">Checkbox</label>                      
						</div>
						<pre>&lt;input id=&quot;ch1&quot; type=&quot;checkbox&quot; /&gt;&amp;nbsp;&lt;label for=&quot;ch1&quot;&gt;Checkbox&lt;/label&gt;
</pre>
					</div>

					


					<div class="box-content">
						<h1><strong>Typografy</strong></h1>
						<h2>Heading h2</h2>
						<p><img src="./assets/img/car.jpg" alt="" style="float:left;margin:5px;" /> Suspendisse <a href="#">text link</a> vel nisi accumsan pretium. Etiam id massa ut neque iaculis auctor. Fermentum eu dictum risus consequat. Cras magna justo, iaculis non scelerisque eget, condimentum in tellus. Maecenas a sem quam. Suspendisse facilisis neque tempor enim imperdiet sodales. Vitae lobortis sapien vestibulum. Suspendisse vehicula libero vel nisi accumsan. Suspendisse vehicula libero vel nisi accumsan pretium. Etiam id massa ut neque iaculis auctor. Fermentum eu dictum risus consequat. Cras magna justo, iaculis non scelerisque eget, condimentum in tellus. Maecenas a sem quam. Suspendisse.</p>
						<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assuiber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
						<h3>Heading h3</h3>
						<ul>
							<li><strong>Etiam ante sem,</strong> porta a porttitor ut, varius varius metus.</li>
							<li><strong>Nunc eu felis</strong> quis metus volutpat pellentesque.</li>
							<li><strong>Duis gravida</strong> tincidunt enim sed cursus.</li>
							<li><strong>Nunc eu felis</strong> quis metus volutpat pellentesque.</li>
							<li><strong>Duis gravida</strong> tincidunt enim sed cursus.</li>
						</ul>
						<ol>
							<li><strong>Etiam ante sem,</strong> porta a porttitor ut, varius varius metus.</li>
							<li><strong>Nunc eu felis</strong> quis metus volutpat pellentesque.</li>
							<li><strong>Duis gravida</strong> tincidunt enim sed cursus.</li>
							<li><strong>Nunc eu felis</strong> quis metus volutpat pellentesque.</li>
							<li><strong>Duis gravida</strong> tincidunt enim sed cursus.</li>
						</ol>
						<p>Suspendisse <a href="#">text link</a> vel nisi accumsan pretium. Etiam id massa ut neque iaculis auctor. Fermentum eu dictum risus consequat. Cras magna justo, iaculis non scelerisque eget, condimentum in tellus. Maecenas a sem quam. Suspendisse facilisis neque tempor enim imperdiet sodales. Vitae lobortis sapien vestibulum. Suspendisse vehicula libero vel nisi accumsan. Suspendisse vehicula libero vel nisi accumsan pretium. Etiam id massa ut neque iaculis auctor. Fermentum eu dictum risus consequat. Cras magna justo, iaculis non scelerisque eget, condimentum in tellus. Maecenas a sem quam. Suspendisse.</p>
						<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assuiber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
						<blockquote>
							<p>Quotation - Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta</p>
						</blockquote>
						<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.<br />Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam <strong>liber tempor cum soluta nobis</strong> eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
						<h4>Heading 4</h4>
						<ol>
							<li>List of numbers</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</li>
							<li>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, uis nostrud exercitation ullamco laboris nisi ut iquip x ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</li>
							<li>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
						</ol>
						<hr />
						<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
						<ul>
							<li>List of definitions</li>
							<li>List of definitions</li>
              <li>List of definitions</li>
              <li>List of definitions</li>
              <li>List of definitions</li>
              <li>List of definitions</li>
						</ul>
						<h5>Heading 5</h5>
						<a href="#" class="ext">Ext. link</a>
						<h6>Heading 6</h6>
						<p><cite>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</cite></p>
						<table>
							<thead>
								<tr>
									<th id="th1BD4E9800000">Column 1</th>
									<th id="th1BD4E9800001">Column 2</th>
									<th id="th1BD4E9800002">Column 3</th>
									<th id="th1BD4E9800003">Column 4</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td headers="th1BD4E9800000">ff</td>
									<td headers="th1BD4E9800001">fff</td>
									<td headers="th1BD4E9800002">fdsd</td>
									<td headers="th1BD4E9800003">fsdf</td>
								</tr>
								<tr>
									<td headers="th1BD4E9800000">ff</td>
									<td headers="th1BD4E9800001">fff</td>
									<td headers="th1BD4E9800002">fdsd</td>
									<td headers="th1BD4E9800003">fsdf</td>
								</tr>
								<tr>
									<td headers="th1BD4E9800000">ff</td>
									<td headers="th1BD4E9800001">fff</td>
									<td headers="th1BD4E9800002">fdsd</td>
									<td headers="th1BD4E9800003">fsdf</td>
								</tr>
								<tr>
									<td headers="th1BD4E9800000">ff</td>
									<td headers="th1BD4E9800001">fff</td>
									<td headers="th1BD4E9800002">fdsd</td>
									<td headers="th1BD4E9800003">fsdf</td>
								</tr>
								<tr>
									<td headers="th1BD4E9800000">ff</td>
									<td headers="th1BD4E9800001">fff</td>
									<td headers="th1BD4E9800002">fdsd</td>
									<td headers="th1BD4E9800003">fsdf</td>
								</tr>
								<tr>
									<td headers="th1BD4E9800000">ff</td>
									<td headers="th1BD4E9800001">fff</td>
									<td headers="th1BD4E9800002">fdsd</td>
									<td headers="th1BD4E9800003">fsdf</td>
								</tr>
								<tr>
									<td headers="th1BD4E9800000">ff</td>
									<td headers="th1BD4E9800001">fff</td>
									<td headers="th1BD4E9800002">fdsd</td>
									<td headers="th1BD4E9800003">fsdf</td>
								</tr>
							</tbody>
						</table>
					</div>
          
          
        </div>
      </div>
    </div>
  </div>
  
<?php
get_footer();
?>
