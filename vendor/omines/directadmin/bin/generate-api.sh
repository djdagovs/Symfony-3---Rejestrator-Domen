mkdir -p _docs
cd _docs
git clone https://${GH_TOKEN}@github.com/omines/directadmin.git . > /dev/null
git checkout gh-pages
rm -rf api

# Generate Api
wget http://www.apigen.org/apigen.phar
php apigen.phar generate -s ../src -d api --template-theme "bootstrap"
rm apigen.phar

# Set identity
git config --global user.email "travis@travis-ci.org"
git config --global user.name "Travis"
git config --global push.default "simple"

# Push generated files
git add --all .
git commit -m "API documentation auto-updated"
git push origin -fq > /dev/null

