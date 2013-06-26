To install wkhtmltopdf
-----------------------------
Download: http://wkhtmltopdf.googlecode.com/files/wkhtmltopdf-0.9.9-static-amd64.tar.bz2
wget http://wkhtmltopdf.googlecode.com/files/wkhtmltopdf-0.9.9-static-amd64.tar.bz2 
tar xvjf wkhtmltopdf-0.9.9-static-amd64.tar.bz2
mv wkhtmltopdf-amd64 /usr/local/bin/wkhtmltopdf
chmod +x /usr/local/bin/wkhtmltopdf


To test wkhtmltopdf run the following command:
-----------------------------
# wkhtmltopdf http://www.google.com google.pdf

To run from directory
-----------------------------
./wkhtmltopdf-amd64 http://www.example.com example.pdf

To run in PHP
-----------------------------
$command = 'wkhtmltopdf http://www.google.com google.pdf';
shell_exec($command);

Find documentation on the project page: http://mikehaertl.github.com/phpwkhtmltopdf/