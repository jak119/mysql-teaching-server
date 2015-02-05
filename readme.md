#MySQL Teaching Lab Scripts

A collection of scripts to manage and automate the management of a MySQL teaching lab server.

## [addclass](addclass)
Run with `addclass` to add a full list of students from a line delimited list.

## [addstudent](addstudent)
Run with `addstudent` and follow prompts to add a single student.

## [createdb](createdb)
A bash script created by [Brian Racer](http://jetpackweb.com/blog/2009/07/20/bash-script-to-create-mysql-database-and-user/) and slightly modified to suite our needs. This script is called by each of the above scripts.

## [endofsemster](endofsemester)
A bash script to clear out all student databases and student users. Requires MySQL root password. Run with `endofsemester`.
