<html>
    <head>
        <style>
            /** 
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
             **/
            @page {
                margin: 0cm 0cm;
            }

            /* Define now the real margins of every page in the PDF */
            body {
                margin-top: 3cm;
                margin-left: 2cm;
                margin-right: 2cm;
                margin-bottom: 2cm;
            }

            /* Define the header rules */
            header {
                position: fixed;
                /* top: 0.75cm;                 */
                top: -2px;        
                margin-top: 10px;        
                text-align: center
            }

            /* Define the footer rules */
            footer {
                position: fixed; 
                /* bottom: 1.5cm;                  */
                bottom: -2px;                 
                text-align: center;
                margin-bottom: 10px;
            }

            p {
                /* margin-top: 20px; */
                font-size: 11px;
                line-height: 1.5;
            }
            
        </style>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
            <img src="{{public_path('template_header.png')}}" width="100%"/>
        </header>

        <footer>
            <img src="{{public_path('template_footer.png')}}" width="100%"/>
        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
            <p>{!! $jawaban !!}</p>            
        </main>
    </body>
</html>