#docker run -d --name res-step6-static_1 -v "$PWD"/www1/:/usr/local/apache2/htdocs/ res/step1
#docker run -d --name res-step6-static_2 -v "$PWD"/www2/:/usr/local/apache2/htdocs/ res/step1
#docker run -d --name res-step6-static_3 -v "$PWD"/www3/:/usr/local/apache2/htdocs/ res/step1

docker run -d --name res-step6-rp -p 80:80 \
    -e STATIC_APP_1=172.17.0.2:80 \
    -e STATIC_APP_2=172.17.0.3:80 \
    -e STATIC_APP_3=172.17.0.4:80 \
    -e DYNAMIC_APP_1=172.17.0.6:80 \
    -e DYNAMIC_APP_2=172.17.0.7:80 \
    -e DYNAMIC_APP_3=172.17.0.8:80 \
    res/step6-rp