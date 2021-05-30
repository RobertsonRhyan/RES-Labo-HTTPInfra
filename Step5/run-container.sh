docker run -d --name res-step5-static -v "$PWD"/../Step4/www/:/usr/local/apache2/htdocs/ res/step1
docker run -d --name res-step5-dynamic res/step2
docker run -d --name res-step5-rp -p 80:80 -e STATIC_APP=172.17.0.2:80 -e DYNAMIC_APP=172.17.0.3:8082 res/step3-rp