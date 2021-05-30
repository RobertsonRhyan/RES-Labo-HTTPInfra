docker run -d --name res-step3-static -v "$PWD"/../Step1/www/:/usr/local/apache2/htdocs/ res/step1
docker run -d --name res-step3-dynamic res/step2
docker run -d -p 80:80 --name res-step3-rp res/step3-rp
