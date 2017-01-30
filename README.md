Based on https://github.com/cboettig/labnotebook

## Install
Requires ruby 2.0
```bash
git clone git@github.com:wurmlab/wurmlab.github.io.git
cd wurmlab.github.io.git
gem install bundler
bundle update
bundle install
```
Then running `jekyll serve -w`  will rebuild the pages (into `_site`) every time you save a change, and serve them on  a local http server. 


## Maintenance
 * check that links are working: 
   `linklint  -http -host  wurmlab.github.io -doc webstatus /@`
   outputs information into webstatus folder. 
 * check html integrity? 

```bash
brew install tidy-html5
bundle install
bundle exec rake validate_website 
```

 * check css integrity?




## Old: How this works

* Edit your files in place (eg. index.html, team/index.html) or write a new post.
   Use `rake newpost[post-name]` to create a new post in the _posts folder with the name "post-name".

* run `rake translit` to transliterate any weird chars. (no longer necessary becasue we change the locale)

*  `rake build` creates the site in _site. 



