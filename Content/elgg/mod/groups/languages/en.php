<?php
/**
 * Elgg groups plugin language pack
 *
 * @package ElggGroups
 */
 
 //AlexF: Replaced all group referenves with case

$english = array(

	/**
	 * Menu items and titles
	 */
	'groups' => "Cases",
	'groups:owned' => "My cases",
	'groups:owned:user' => "%s's cases",
	'groups:yours' => "Cases I follow",
	'groups:user' => "Cases %s follows",
	'groups:all' => "All cases",
	'groups:add' => "Create a new case",
	'groups:edit' => "Edit case",
	'groups:delete' => 'Delete case',
	'groups:membershiprequests' => 'Manage join requests',
	'groups:membershiprequests:pending' => 'Manage join requests (%s)',
	'groups:invitations' => 'Case invitations',
	'groups:invitations:pending' => 'Case invitations (%s)',

	'groups:icon' => 'Case icon (leave blank to leave unchanged)',
	'groups:name' => 'Case name',
	'groups:username' => 'Case short name (displayed in URLs, alphanumeric characters only)',
	'groups:description' => 'Description',
	'groups:briefdescription' => 'Brief description',
	'groups:interests' => 'Tags',
	'groups:website' => 'Website',
	'groups:members' => 'Case members',
	'groups:my_status' => 'My status',
	'groups:my_status:group_owner' => 'This is your case',
	'groups:my_status:group_member' => 'You follow this case',
	'groups:subscribed' => 'Case notifications on',
	'groups:unsubscribed' => 'Case notifications off',

	'groups:members:title' => 'Members of %s',
	'groups:members:more' => "View all members",
	'groups:membership' => "Case membership permissions",
	'groups:access' => "Access permissions",
	'groups:owner' => "Owner",
	'groups:owner:warning' => "Warning: if you change this value, you will no longer be the owner of this case.",
	'groups:widget:num_display' => 'Number of cases to display',
	'groups:widget:membership' => 'Case membership',
	'groups:widgets:description' => 'Display the cases you are a member of on your profile',
	'groups:noaccess' => 'No access to case',
	'groups:permissions:error' => 'You do not have the permissions for this',
	'groups:incase' => 'in the case',
	'groups:cantcreate' => 'You can not create a case. Only admins can.',
	'groups:cantedit' => 'You can not edit this case',
	'groups:saved' => 'Case saved',
	'groups:featured' => 'Featured cases',
	'groups:makeunfeatured' => 'Unfeature',
	'groups:makefeatured' => 'Make featured',
	'groups:featuredon' => '%s is now a featured case.',
	'groups:unfeatured' => '%s has been removed from the featured cases.',
	'groups:featured_error' => 'Invalid case.',
	'groups:joinrequest' => 'Request membership',
	'groups:join' => 'Join case',
	'groups:leave' => 'Leave case',
	'groups:invite' => 'Invite friends',
	'groups:invite:title' => 'Invite friends to this case',
	'groups:inviteto' => "Invite friends to '%s'",
	'groups:nofriends' => "You have no friends left who have not been invited to this case.",
	'groups:nofriendsatall' => 'You have no friends to invite!',
	'groups:viacases' => "via cases",
	'groups:case' => "Case",
	'groups:search:tags' => "tag",
	'groups:search:title' => "Search for cases tagged with '%s'",
	'groups:search:none' => "No matching cases were found",
	'groups:search_in_case' => "Search in this case",
	'groups:acl' => "Case: %s",

	'discussion:notification:topic:subject' => 'New case discussion post',
	'groups:notification' =>
'%s added a new discussion topic to %s:

%s
%s

View and reply to the discussion:
%s
',

	'discussion:notification:reply:body' =>
'%s replied to the discussion topic %s in the case %s:

%s

View and reply to the discussion:
%s
',

	'groups:activity' => "Case activity",
	'groups:enableactivity' => 'Enable case activity',
	'groups:activity:none' => "There is no case activity yet",

	'groups:notfound' => "Case not found",
	'groups:notfound:details' => "The requested case either does not exist or you do not have access to it",

	'groups:requests:none' => 'There are no current membership requests.',

	'groups:invitations:none' => 'There are no current invitations.',

	'item:object:caseforumtopic' => "Discussion topics",

	'caseforumtopic:new' => "Add discussion post",

	'groups:count' => "cases created",
	'groups:open' => "open case",
	'groups:closed' => "closed case",
	'groups:member' => "members",
	'groups:searchtag' => "Search for cases by tag",

	'groups:more' => 'More cases',
	'groups:none' => 'No cases',


	/*
	 * Access
	 */
	'groups:access:private' => 'Closed - Users must be invited',
	'groups:access:public' => 'Open - Any user may join',
	'groups:access:case' => 'Case members only',
	'groups:closedcase' => 'This case has a closed membership.',
	'groups:closedcase:request' => 'To ask to be added, click the "request membership" menu link.',
	'groups:visibility' => 'Who can see this case?',

	/*
	Case tools
	*/
	'groups:enableforum' => 'Enable case discussion',
	'groups:yes' => 'yes',
	'groups:no' => 'no',
	'groups:lastupdated' => 'Last updated %s by %s',
	'groups:lastcomment' => 'Last comment %s by %s',

	/*
	Case discussion
	*/
	'discussion' => 'Discussion',
	'discussion:add' => 'Add discussion topic',
	'discussion:latest' => 'Latest discussion',
	'discussion:case' => 'Case discussion',
	'discussion:none' => 'No discussion',
	'discussion:reply:title' => 'Reply by %s',

	'discussion:topic:created' => 'The discussion topic was created.',
	'discussion:topic:updated' => 'The discussion topic was updated.',
	'discussion:topic:deleted' => 'Discussion topic has been deleted.',

	'discussion:topic:notfound' => 'Discussion topic not found',
	'discussion:error:notsaved' => 'Unable to save this topic',
	'discussion:error:missing' => 'Both title and message are required fields',
	'discussion:error:permissions' => 'You do not have permissions to perform this action',
	'discussion:error:notdeleted' => 'Could not delete the discussion topic',

	'discussion:reply:deleted' => 'Discussion reply has been deleted.',
	'discussion:reply:error:notdeleted' => 'Could not delete the discussion reply',

	'reply:this' => 'Reply to this',

	'groups:replies' => 'Replies',
	'groups:forum:created' => 'Created %s with %d comments',
	'groups:forum:created:single' => 'Created %s with %d reply',
	'groups:forum' => 'Discussion',
	'groups:addtopic' => 'Add a topic',
	'groups:forumlatest' => 'Latest discussion',
	'groups:latestdiscussion' => 'Latest discussion',
	'groups:newest' => 'Newest',
	'groups:popular' => 'Popular',
	'groupspost:success' => 'Your reply was succesfully posted',
	'groups:alldiscussion' => 'Latest discussion',
	'groups:edittopic' => 'Edit topic',
	'groups:topicmessage' => 'Topic message',
	'groups:topicstatus' => 'Topic status',
	'groups:reply' => 'Post a comment',
	'groups:topic' => 'Topic',
	'groups:posts' => 'Posts',
	'groups:lastperson' => 'Last person',
	'groups:when' => 'When',
	'grouptopic:notcreated' => 'No topics have been created.',
	'groups:topicopen' => 'Open',
	'groups:topicclosed' => 'Closed',
	'groups:topicresolved' => 'Resolved',
	'grouptopic:created' => 'Your topic was created.',
	'groupstopic:deleted' => 'The topic has been deleted.',
	'groups:topicsticky' => 'Sticky',
	'groups:topicisclosed' => 'This discussion is closed.',
	'groups:topiccloseddesc' => 'This discussion is closed and is not accepting new comments.',
	'grouptopic:error' => 'Your case topic could not be created. Please try again or contact a system administrator.',
	'groups:forumpost:edited' => "You have successfully edited the forum post.",
	'groups:forumpost:error' => "There was a problem editing the forum post.",


	'groups:privatecase' => 'This case is closed. Requesting membership.',
	'groups:notitle' => 'Cases must have a title',
	'groups:cantjoin' => 'Can not join case',
	'groups:cantleave' => 'Could not leave case',
	'groups:removeuser' => 'Remove from case',
	'groups:cantremove' => 'Cannot remove user from case',
	'groups:removed' => 'Successfully removed %s from case',
	'groups:addedtocase' => 'Successfully added the user to the case',
	'groups:joinrequestnotmade' => 'Could not request to join case',
	'groups:joinrequestmade' => 'Requested to join case',
	'groups:joined' => 'Successfully joined case!',
	'groups:left' => 'Successfully left case',
	'groups:notowner' => 'Sorry, this is not your case.',
	'groups:notmember' => 'Sorry, you do not follow this case.',
	'groups:alreadymember' => 'You are already a member of this case!',
	'groups:userinvited' => 'User has been invited.',
	'groups:usernotinvited' => 'User could not be invited.',
	'groups:useralreadyinvited' => 'User has already been invited',
	'groups:invite:subject' => "%s you have been invited to join %s!",
	'groups:updated' => "Last reply by %s %s",
	'groups:started' => "Started by %s",
	'groups:joinrequest:remove:check' => 'Are you sure you want to remove this join request?',
	'groups:invite:remove:check' => 'Are you sure you want to remove this invitation?',
	'groups:invite:body' => "Hi %s,

%s invited you to join the '%s' case. Click below to view your invitations:

%s",

	'groups:welcome:subject' => "Welcome to the %s case!",
	'groups:welcome:body' => "Hi %s!

You are now a member of the '%s' case! Click below to begin posting!

%s",

	'groups:request:subject' => "%s has requested to join %s",
	'groups:request:body' => "Hi %s,

%s has requested to join the '%s' case. Click below to view their profile:

%s

or click below to view the case's join requests:

%s",

	/*
		Forum river items
	*/

	'river:create:groups:default' => '%s created the case %s',
	'river:join:groups:default' => '%s joined the case %s',
	'river:create:object:groupforumtopic' => '%s added a new discussion topic %s',
	'river:reply:object:groupforumtopic' => '%s replied on the discussion topic %s',
	
	'groups:nowidgets' => 'No widgets have been defined for this case.',


	'groups:widgets:members:title' => 'Case members',
	'groups:widgets:members:description' => 'List the members of a case.',
	'groups:widgets:members:label:displaynum' => 'List the members of a case.',
	'groups:widgets:members:label:pleaseedit' => 'Please configure this widget.',

	'groups:widgets:entities:title' => "Objects in case",
	'groups:widgets:entities:description' => "List the objects saved in this case",
	'groups:widgets:entities:label:displaynum' => 'List the objects of a case.',
	'groups:widgets:entities:label:pleaseedit' => 'Please configure this widget.',

	'groups:forumtopic:edited' => 'Forum topic successfully edited.',

	'groups:allowhiddencases' => 'Do you want to allow private (invisible) cases?',
	'groups:whocancreate' => 'Who can create new cases?',

	/**
	 * Action messages
	 */
	'groups:deleted' => 'Case and case contents deleted',
	'groups:notdeleted' => 'Case could not be deleted',

	'groups:notfound' => 'Could not find the case',
	'grouppost:deleted' => 'Case posting successfully deleted',
	'grouppost:notdeleted' => 'Case posting could not be deleted',
	'groupstopic:deleted' => 'Topic deleted',
	'groupstopic:notdeleted' => 'Topic not deleted',
	'grouptopic:blank' => 'No topic',
	'grouptopic:notfound' => 'Could not find the topic',
	'grouppost:nopost' => 'Empty post',
	'groups:deletewarning' => "Are you sure you want to delete this case? There is no undo!",

	'groups:invitekilled' => 'The invite has been deleted.',
	'groups:joinrequestkilled' => 'The join request has been deleted.',

	// ecml
	'groups:ecml:discussion' => 'Case Discussions',
	'groups:ecml:caseprofile' => 'Case profiles',

);

add_translation("en", $english);
