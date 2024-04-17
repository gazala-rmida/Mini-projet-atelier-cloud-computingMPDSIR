
Vagrant.configure("2") do |config|
#   # Configuration de la   machine 1 web virtuelle machien1
  config.vm.define "web" do |web|
    config.vm.box = "ubuntu/xenial64"
    web.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"
    web.vm.hostname = "web"
    web.vm.synced_folder "web", "/opt/web"  
    web.vm.provision "shell", inline: <<-SHELL
      sudo get update
      #sudo apt install -y apache2
      sudo apt install php7.0
      #ln -s /opt/web /var/www/html/web
    SHELL
  end

#   # Configuration de la  machine graph virtuelle machien2
  config.vm.define "graph" do |graph|
    graph.vm.box = "ubuntu/xenial64"
    graph.vm.network "forwarded_port", guest: 80, host: 8081, host_ip: "127.0.0.1"
    graph.vm.hostname = "graph"
    graph.vm.synced_folder "graph", "/opt/graph" 
    graph.vm.provision "shell", inline: <<-SHELL
      apt-get update
      apt-get install -y apache2
      ln -s /opt/graph /var/www/html/graph
    SHELL
  end
end

  