set :application,       'judeprank.atevans.com'
set :repository,        '_site'
set :scm,               :none
set :deploy_via,        :copy
set :copy_compression,  :gzip
set :use_sudo,          false
set :host,              'judeprank.atevans.com'

role :web,  host
role :app,  host
role :db,   host, :primary => true
ssh_options[:port] = 22

set :user,    'agius'
set :group,   user
set :deploy_to,    "/home/#{user}/#{application}"

namespace :deploy do

  [:start, :stop, :restart, :finalize_update].each do |t|
    desc "#{t} task is a no-op with jekyll"
    task t, :roles => :app do ; end
  end
  
end