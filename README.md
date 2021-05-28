# RES-Labo-HTTPInfra

Author: Rhyan Robertson

## Step 1 : Static HTTP server with apache httpd

This step is about setting up a *Docker* HTTP server with apache [httpd](https://hub.docker.com/_/httpd) that serves static web content. 
For demo purposes, we'll use a simple Bootstrap theme ["Grayscale"](https://startbootstrap.com/theme/grayscale) as an example.

Theses instruction are for Linux, but you can adapt it easily to Windows or Mac.

**Prerequisite :** You need a running Docker Engine, if it's not your case, you can follow this [guide](https://docs.docker.com/engine/install/ubuntu/).

### Instructions

1. Go into folder `Step1`.

2. Run `build-container.sh`, it will create the docker image and give users *read* rights to the `www` folder that contains the static web content. 
   You might have to enter your password to grant the *read* rights to the `www` dir.
   ![](figs/fig_01.png)

3. You can now run `run-container.sh` with the default settings (port : 8080, mapped volume : /www) or you can edit it.

You should now have a running Docker HTTP server. Check http://localhost:8080/ to see if it's working correctly.

### Configuration

The apache config files are located in `/usr/local/apache2/conf/httpd.conf`



## Step 2 : Dynamic HTTP server with express.js

This step is about setting up a Docker Dynamic HTTP server with [express.js](https://expressjs.com/) that generates dynamic, random content and return a JSON payload to the client.

You can also get a custom welcome message by changing the name at the end of the URI : http://localhost:8081/name/rhyan

### Instructions
1. Go into folder `Step2`
2. Run `build-container.sh`
![](figs/fig_02.png)
3. Run `run-container.sh`

You should now be able to access http://localhost:8081/ .

### Configuration

- You can changed the mapped port in run-container.sh
- You can change the internal port of the container in /src/index.js

## Step3 : Reverse proxy with apache (static configuration)

In this step, we setup a Reverse Proxy


![](figs/fig_03.JPEG)
![](figs/fig_04.JPEG)
![](figs/fig_05.PNG)



