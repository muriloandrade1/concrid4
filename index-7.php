<?php include'header.php'; ?>
      </header>
    <section id="content">
        <div class="sub-content">
  <div class="container">
        <article>
        <h2>Índice</h2>
        <div class="inner">
            <ol class="table_content">
            <li><a href="#unzipping">Tópico 1</a>
              <li><a href="#general">Tópico 2</a></li>
            <li><a href="#static">Tópico 3</a>
                <ul>
                <li><a href="#edit-html">Sub Tópico 3.1</a></li>
                <li><a href="#edit-psd">Sub Tópico 3.2</a></li>
                <li><a href="#cufon">Sub Tópico 3.3</a></li>
              </ul>
              </li>
            <li><a href="#tutorials">Tópico 4</a>
                <ul>
                <li><a href="#edit-text">Sub Tópico 4.1</a></li>
                <li><a href="#edit-images">Sub Tópico 4.2</a></li>
                <li><a href="#contact-form">Sub Tópico 4.3</a></li>
              </ul>
              </li>
            <li><a href="#addons">Tópico 5</a>
              <li><a href="#upload">Tópico 6</a>
              <li><a href="#conclusion">Tópico 6</a></li>
          </ol>
          </div>
      </article>
        <article>
        <h2 id="unzipping">Unzipping Template Package</h2>
        <div class="inner">
            <p>After unzipping the template package you will find 3 folders: &quot;<strong>documentation</strong>&quot;, &quot;<strong>screenshots</strong>&quot; and &quot;<strong>site</strong>&quot;. You can also see a zip archive called &quot;<strong>sources_############.zip</strong>&quot; that you need to unzip. </p>
            <p>The sources package contains all source files for the template. The package is password protected and can be extracted only with <a href="http://templatemonster.com/help/unzipping-your-template.html" target="_blank">WinZip (Windows OS)</a> and <a href="http://templatemonster.com/help/how-unzip-template-mac.html" target="_blank">StuffitExpander (MAC OS)</a> software.</p>
            <p>You can download both applications for free using the free trial options:</p>
            <ul>
            <li><a href="http://www.winzip.com/downauto.cgi?o=1&file=http://download.winzip.com/winzip160.exe&email=&er=&os=win" target="_blank">WinZip</a></li>
            <li><a href="http://www.stuffit.com/mac-stuffit-download.html" target="_blank">StuffitExpander</a></li>
          </ul>
            <p class="notification-box">While unzipping "sources_############.zip" archive you will be prompted to enter a password, which you can find at your Product Download Page (open the link in the email you received from our company).</p>
            <p>As soon as you are done with the unzipping the template you should have 4 folders in total: &quot;<strong>documentation</strong>&quot;, &quot;<strong>screenshots</strong>&quot;, &quot;<strong>site</strong>&quot; and &quot;<strong>sources</strong>&quot;.</p>
          </div>
        <h2 id="general">General Information and Template Structure</h2>
        <div class="inner">
            <h3 id="static-req">Software requirements</h3>
            <p><strong>Adobe Dreamweaver</strong> (<a href="http://www.adobe.com/products/dreamweaver/" target="_blank">download free trial</a>). Used to edit the .HTML, .JS, .PHP and .CSS files.<br/>
            <strong>Adobe Photoshop CS</strong> or later (<a href="http://www.adobe.com/products/photoshop.html" target="_blank">download free trial</a>). Used to edit .PSD files.</p>
            <p>The following scheme displays the Bootsrap template files structure. </p>
            <ul class="files-structure">
            <li class="lev-1">"<strong>documentation</strong>" – contains documentation on template editing and installation.</li>
            <li class="lev-1">"<strong>screenshots</strong>" – contains screenshots of the template.</li>
            <li class="lev-1">"<strong>site</strong>" – contains the .html files of the template.</li>
            <li class="lev-2">- "<strong>assets</strong>" – contains assets and bonus add-ons.</li>
            <li class="lev-2">- "<strong>bat</strong>" – contains contact form processing .php script.</li>
            <li class="lev-2">- "<strong>css</strong>" – contains all the .css files used in the design.</li>
            <li class="lev-2">- "<strong>img</strong>" – contains all the images used in .html files.</li>
            <li class="lev-2">- "<strong>js</strong>" – contains JavaScript libraries and jQuery plugins.</li>
            <li class="lev-2">- "<strong>search</strong>" – contains .js, .php and .css file of the search engine.</li>
            <li class="lev-1">"<strong>sources</strong>" – contains source files.</li>
            <li class="lev-2">- "<strong>less</strong>" - contains .css LESS files used in the template.</li>
            <li class="lev-2">- "<strong>psd</strong>" – contains Adobe Photoshop .psd files.</li>
            <li class="lev-1 file">- "<strong>fonts_info.txt</strong>" – contains the list of fonts used in template.</li>
            <li class="lev-1 file">- "<strong>info.txt</strong>" – contains the information about password protected "sources" folder.</li>
          </ul>
          </div>
        <h2 id="static">Editing Bootstrap template</h2>
        <div class="inner">
            <p>Working with the  template you need to edit the <strong>.html</strong>, <strong>.css</strong>, <strong>.js</strong> and <strong>.psd</strong> files. </p>
            <h3 id="edit-html">Editing HTML and CSS files</h3>
            <p>All editable HTML files are located in "<strong>site</strong>" folder of the template package (index.html, index-1.html,index-2.html, etc.) Each index-#.html file represents a single template page. </p>
            <p>To open .html file with Adobe Dreamweaver application, you should right mouse click on the file, and in the context menu select <strong>Open with -> Adobe Dreamweaver</strong>. When the file is opened you can start editing it.</p>
            <p>Adobe Dreamweaver is a recommended application as it allows you to edit the HTML files content in visual mode. Open any .html file and click the <strong>Live Code </strong> button at the top of the screen to switch to visual mode. </p>
            <div class="cols"> <a class="first" href="img/dreamweaver-code.jpg" rel="prettyPhoto"><img src="img/dreamweaver-code.jpg" width="460"></a> <a class="last" href="img/dreamweaver-design.jpg" rel="prettyPhoto"><img src="img/dreamweaver-design.jpg" width="460"></a> </div>
            <p>Feel free to check the detailed text and video tutorials on <a href="http://www.templatemonster.com/help/general-tutorials/work-with-html/" target="_blank">how to edit HTML files with Adobe Dreamweaver</a>.</p>
            <p>CSS files are used to change the template appearance like fonts (font-family, font-size, color etc), backgrounds, column width values etc. You can edit the css files with Adobe Dreamweaver application. Detailed tutorials on <a href="http://templatemonster.com/help/general-tutorials/work-with-css/" target="_blank">how to work with the CSS files</a> are available at our online help center. </p>
            <h3 id="edit-psd">Editing PSD files</h3>
            <p>PSD files are located in the &quot;<strong>sources/psd</strong>&quot; folder in your template package. PSD are the source files of the template design. They are divided into layers so any part of the template design can be changed. </p>
            <p>During the customization process you can refer to the PSD files in order to change the images used in the content pages or in the design. </p>
            <p align="center"><a class="last" href="images/photoshop-interface.jpg" rel="prettyPhoto"><img src="img/photoshop-interface.jpg" width="460"></a></p>
            <p>You can learn more about working with photoshop by<a href="http://templatemonster.com/help/general-tutorials/work-with-photoshop/" target="_blank"> checking the detailed tutorials</a>.</p>
            <h3 id="cufon">Custom Fonts</h3>
            <p>Some templates may contain the non-default fonts used in the design. By default the internet browser can render only fonts that are installed to your operating system. In other words if your website design uses some custom fonts and these custom fonts are not installed on your website visitor's computer, custom fonts won't be displayed. Default fonts will be rendered instead. That's why web developers should look for some alternative solutions. In our Bootstrap templates custom fonts are embedded using <strong>Google Web Fonts</strong> technology. </p>
            <h4>Google Web Fonts</h4>
            <p>You can learn more on using Google Web Fonts by checking the tutorial on <a href="http://templatemonster.com/help/how-to-use-the-google-web-fonts-api.html">how to work with Google web Fonts</a>. </p>
          </div>
        <h2 id="tutorials">Customization Tutorials</h2>
        <div class="inner">
            <h3 id="edit-text">How to edit text</h3>
            <p>Bootstrap templates are HTML based templates so all content is stored and could be accessed though the .html files.</p>
            <ol>
            <li>Open your template package and go to the site folder.</li>
            <li>There open index.html  file with your HTML editor.</li>
            <li>You can use the search tool <strong>CTRL+F </strong>to find any text you need.</li>
            <li>Edit text in HTML editor. Save the file and open it with your Browser to see the changes.</li>
          </ol>
            <p>The other way is to use the browser developer tool to find the blocks you want to edit. You can learn more about the developer tools checking the tools description and tutorials.</p>
            <p>Feel free to check the following <a href="http://www.templatemonster.com/help/developer-tools.html" target="_blank">Developer Tools</a> article.</p>
            <p>You can also check the video tutorial on <a href="http://templatemonster.com/help/js-animated-how-to-edit-text.html">how to edit text in JS Animated templates</a></p>
            <h3 id="edit-images">How to edit images</h3>
            <p>Open the template folder, go to '<strong>site/images</strong>' directory. You can upload your images with the same name and extension to replace the default ones.</p>
            <p>The other way is to upload custom images with your titles and extensions. Then you&rsquo;ll need to change the image file names in the html files.</p>
            <ol>
            <li>Open <strong>.html</strong> file from the &ldquo;<strong>site</strong>&rdquo; folder with your html editor.</li>
            <li>Use search tool <strong>CTRL+F</strong> to find the images in the html file.</li>
            <li>Replace the image title and extension.</li>
          </ol>
            <p>You can also check the video tutorial on <a href="http://templatemonster.com/help/js-animated-how-to-change-images.html">how to edit images</a>.</p>
            <h3 id="contact-form">How to activate contact form</h3>
            <ol>
            <li>Open the template folder.</li>
            <li>Go the <strong>site/js</strong> directory.</li>
            <li>There open the '<strong>forms.js</strong>' file with your editor (Adobe Dreamweaver, Notepad etc).</li>
            <li>Using the Find and Replace tool (CTRL+F) search for the <strong>ownerEmail</strong> or just scroll down to the very bottom of the page.</li>
          </ol>
            <p>You should see the following line:</p>
            <p> <strong>ownerEmail:'#'</strong> </p>
            <p>replace <strong>#</strong> symbol with your email address. That’s all, now the contact form should send the messages to your email account.</p>
            <p></p>
            <p>You can see the detailed tutorial on <a href="http://templatemonster.com/help/js-animated-how-to-activate-contact-form.html">how to activate contact form in your template</a>.</p>
          </div>
        <h2 id="addons">TM add-ons</h2>
        <p>Bootstrap templates are provided with three free add-ons:</p>
        <ol>
            <li><strong>Contact Form</strong> - gives visitors the opportunity to send messages to the site-owner.</li>
            <li><strong>Search Engine</strong> - performs search through content of .html files.</li>
            <li><strong>Under Construction</strong> - is the page with countdown timer.</li>
          </ol>
        <p class="notification-box">Note, Contact Form and Search Engine add-ons are already implemented into your template and working by default. Feel free to check the detailed documentation for each add-on in case of additional configuration or in case you are going to implement them into another website/project/template.</p>
        <ol>
            <li><a href="addons\ContactForm\ContactFormManual.html" target="_blank">Contact Form</a></li>
            <li><a href="addons\Search%20Engine\Search%20engine%20manual.html" target="_blank">Search Engine</a></li>
            <li><a href="addons\Under%20Construction\Countdown%20script%20manual.html" target="_blank">Under Construction</a></li>
          </ol>
        <div class="inner"> </div>
        <h2 id="upload">Uploading template</h2>

      </article>
      </div>
        </div>
      </section>

</body>
<?php include'footer.php'; ?>
