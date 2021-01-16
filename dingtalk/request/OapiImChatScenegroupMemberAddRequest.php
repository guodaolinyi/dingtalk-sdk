<?php
/**
 * dingtalk API: dingtalk.oapi.im.chat.scenegroup.member.add request
 * 
 * @author auto create
 * @since 1.0, 2020.09.26
 */
class OapiImChatScenegroupMemberAddRequest
{
	/** 
	 * 客户联系人staffIds
	 **/
	private $contactStaffIds;
	
	/** 
	 * 开放群id
	 **/
	private $openConversationId;
	
	/** 
	 * 成员userid
	 **/
	private $userIds;
	
	private $apiParas = array();
	
	public function setContactStaffIds($contactStaffIds)
	{
		$this->contactStaffIds = $contactStaffIds;
		$this->apiParas["contact_staff_ids"] = $contactStaffIds;
	}

	public function getContactStaffIds()
	{
		return $this->contactStaffIds;
	}

	public function setOpenConversationId($openConversationId)
	{
		$this->openConversationId = $openConversationId;
		$this->apiParas["open_conversation_id"] = $openConversationId;
	}

	public function getOpenConversationId()
	{
		return $this->openConversationId;
	}

	public function setUserIds($userIds)
	{
		$this->userIds = $userIds;
		$this->apiParas["user_ids"] = $userIds;
	}

	public function getUserIds()
	{
		return $this->userIds;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.im.chat.scenegroup.member.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->contactStaffIds,999,"contactStaffIds");
		RequestCheckUtil::checkNotNull($this->openConversationId,"openConversationId");
		RequestCheckUtil::checkMaxListSize($this->userIds,999,"userIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
