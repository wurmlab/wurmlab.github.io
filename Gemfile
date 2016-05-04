source "http://rubygems.org"

require 'json'
require 'open-uri'
versions = JSON.parse(open('https://pages.github.com/versions.json').read)


group :development do
  gem 'github-pages', versions['github-pages']
  gem 'html_validation', '~> 1.1.3'
  gem 'anemone', '~> 0.7.2'
end
