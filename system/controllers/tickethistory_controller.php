<?php
/*!
 * Traq
 * Copyright (C) 2009-2012 Traq.io
 * 
 * This file is part of Traq.
 * 
 * Traq is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 3 only.
 * 
 * Traq is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with Traq. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Ticket History controller
 *
 * @author Jack P.
 * @since 3.0
 * @package Traq
 * @subpackage Controllers
 */
class TicketHistoryController extends AppController
{
	// Before filters
	public $_before = array(
		'edit' => array('_check_permission'),
		'delete' => array('_check_permission')
	);

	/**
	 * Edit ticket update
	 *
	 * @param integer $id
	 */
	public function action_edit($id)
	{
		// Get the ticket update
		$history = TicketHistory::find($id);

		// Has the form been submitted?
		if (Request::$method == 'post')
		{
			// Update the comment
			$history->set('comment', Request::$post['comment']);

			// Save and redirect
			if ($history->save())
			{
				Request::redirect(Request::base($history->ticket->href()));
			}
		}

		View::set('history', $history);
	}

	/**
	 * Delete ticket update
	 *
	 * @param integer $id
	 */
	public function action_delete($id)
	{
		// Get the ticket update
		$history = TicketHistory::find($id);

		// Delete the update
		$history->delete();

		// Is this an ajax request?
		if (Request::is_ajax())
		{
			// Render the view
			View::set('history', $history);
		}
		else
		{
			// Just redirect back to the ticket
			Request::redirect(Request::base($history->ticket->href()));
		}
	}

	/**
	 * Used to check the permission for the requested action.
	 */
	public function _check_permission($action)
	{
		// Check if the user has permission
		if (!current_user()->permission($this->project->id, "{$action}_ticket_history"))
		{
			// oh noes! display the no permission page.
			$this->show_no_permission();
			return false;
		}
	}
}