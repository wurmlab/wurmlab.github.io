require 'rubygems'
require 'rake'
require 'fileutils'


# usage rake newpost[my-new-post] or rake newpost['my new post'] or rake newpost (defaults to "new-post")
desc "Begin a new post in _posts"
task :newpost, :title do |t, args|
  mkdir_p "./_posts"
  args.with_defaults(:title => 'new-post')
  title = args.title
  filename = "./_posts/#{Time.now.strftime('%Y-%m-%d')}-#{title}.markdown"
  if File.exist?(filename)
    abort("rake aborted!") if ask("#{filename} already exists. Do you want to overwrite?", ['y', 'n']) == 'n'
  end
  puts "Creating new post: #{Time.now.strftime('%Y-%m-%d')}-#{title}"
  open(filename, 'w') do |post|
    post.puts "---"
    post.puts "layout: post"
    post.puts "title: \"#{title.gsub(/&/,'&amp;')}\""
    post.puts "date: #{Time.now.strftime('%Y-%m-%d %H:%M')}"
    post.puts "comments: true"
    post.puts "categories: "
    post.puts "---"
  end
end



## Scraping publications
desc "Scrape Google Scholar"
task :scrape do
  Rake::Task
    puts "## Scraping Google Scholar for publications"
    system "ruby -I _rubyscholarrepo/lib/ ./_rubyscholarrepo/bin/rubyscholar --config _rubyscholarconfig.yaml --output _includes/publications.html"
    puts "##Scraping Done."
end


## Building ###
desc "Build the site to _site"
task :build => [ :setlocale, :scrape] do
    puts "##Building now."
    system "jekyll build"
end

desc "ReBuild the site to _site without rescraping"
task :rebuild => [ :setlocale] do
    puts "##Building now."
    system "jekyll build"
end


### Previewing ###
desc "Scrape, build and preview the site"
task :preview => [ :setlocale, :build] do
    system "jekyll serve --watch"
end

task :default => :start

desc "Remove accents and funky chars if needed." 
task :translit do
    puts "## Transliterating from utf-8 to ascii"
    system "find . -type f -name '*.markdown' -print -exec iconv -f utf-8 -t ascii//translit {} -o {} \\;"
    system "find . -type f -name '*.html' -print -exec iconv -f utf-8 -t ascii//translit {} -o {} \\;"
    system "find . -type f -name '*.md' -print -exec iconv -f utf-8 -t ascii//translit {} -o {} \\;"
    puts "## Transliterating Done."
end

task :setlocale do
    puts "## Setting locale to en_US.UTF-8"
    system "LANG=\"en_US.UTF-8\""
    system "LC_ALL=\"en_US.UTF-8\""
    puts "## Locale set to en_US.UTF-8."
end


task :uploadToPoulet do
   system "lftp -e 'mirror --ignore-time -R _site/ /httpdocs' -u yannick taho.p4x.net"
end