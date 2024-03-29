# Change Log
[Package Checklist](http://phppackagechecklist.com/#1,2,3,4,8,9,10,12,13,14)

## //TODO
- perform permission check against pre-loaded permissions on Auth::user()
- cache database lookups
- remove all facades.
- add route prefixes to package routes
- publish assets automatically on update and install
- publish config automatically on install
- load change log when clicking on new version button in menu
- run superadmin permissions update after every package update
- color code enabled permissions on roles
- make callapse panels collapse when another is opened
- Make package framework agnostic. This may be sometime after 1.0.0 release.
- Implement PHP Code Sniffer.
- Implement PHP Coding Standards Fixer.
- Write unit tests (starting with PHPUnit, then possibly phpSpec, Behat, Codeception).
- Implement TravisCI or Scrutinizer.

## 0.13.6 on 10 Mar 2015
### Added ...
- getAllUsersOfRole method in Assignment class.

## 0.13.5 on 4 Mar 2015
### Fixed ...
- detecting combined ownerships like "own|other" or ["own", "other"].

## 0.13.4 on 2 Mar 2015
### Added ...
- functionality to automatically assign user to 'Members' group when created.

### Changed ...
- styling of BonesKeeper menu header.

## 0.13.3 on 1 Mar 2015
### Changed ...
- removed eventing system.
- applied various fixes.

## 0.13.2 on 28 Feb 2015
### Changed ...
- updated service provider to correctly publish assets and config file.
- updated README with new instructions.

## 0.13.1 on 28 Feb 2015
### Changed ...
- updated composer.json for watson\validating.

## 0.13.0 on 28 Feb 2015
### Changed ...
- updated composer.json for Laravel 5.
- removed `package` method in service provider.

## 0.12.1 on 12 Nov 2014
### Changed ...
- updated version number in menu.
- tweaked README.

## 0.12.0 on 12 Nov 2014
### Changed ...
- actions from create, edit, view, inspect, remove to add, change, view, inspect, remove to be more in line with business language.

## 0.11.2 on 11 Nov 2014
### Changed ...
- moved base classes to bones-marshal package as part of bones-marshal 0.3.0 update.

## 0.11.1 on 10 Nov 2014
### Changed ...
- updated to work with bones-marshal 0.2.0.

## 0.11.0 on 10 Nov 2014
### Added ...
- model data validation.

### Changed ...
- text references of "user role" to "assignment".
- architecture to command-pattern with events.

## 0.10.2 on 8 Nov 2014
### Added ...
- initial CONTRIBUTING file.
- DocBlocks to all code.

### Changed ...
- PSR-4 directory structure.

## 0.10.1 on 8 Nov 2014
### Added ...
- SemVer adherence (http://semver.org).
- any non-essential files to .gitattributes to make dist lean.
- exceptions for invalid use of entity, action, or ownership.
- definition of keeper to readme.

### Changed ...
- to PSR-4 from PSR-0.

## 0.10.0 on 7 Nov 2014
### Added ...
- security checks to controllers and views.
- additional options to error handling.
- change log.
- auth before-filters to all controllers to prevent any unauthenticated access.

### Changed ...
- user roles to work with spaces (slugify ID on HTML elements)
