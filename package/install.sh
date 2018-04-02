#! /bin/sh

# Install the package
sudo dpkg -i iptv_*.deb

# Install the dependencies
sudo apt -f install
