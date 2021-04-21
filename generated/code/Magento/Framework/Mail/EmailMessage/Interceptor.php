<?php
namespace Magento\Framework\Mail\EmailMessage;

/**
 * Interceptor class for @see \Magento\Framework\Mail\EmailMessage
 */
class Interceptor extends \Magento\Framework\Mail\EmailMessage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Mail\MimeMessageInterface $body, array $to, \Magento\Framework\Mail\MimeMessageInterfaceFactory $mimeMessageFactory, \Magento\Framework\Mail\AddressFactory $addressFactory, ?array $from = null, ?array $cc = null, ?array $bcc = null, ?array $replyTo = null, ?\Magento\Framework\Mail\Address $sender = null, ?string $subject = '', ?string $encoding = 'utf-8', ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($body, $to, $mimeMessageFactory, $addressFactory, $from, $cc, $bcc, $replyTo, $sender, $subject, $encoding, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function getEncoding() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEncoding');
        return $pluginInfo ? $this->___callPlugins('getEncoding', func_get_args(), $pluginInfo) : parent::getEncoding();
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaders() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHeaders');
        return $pluginInfo ? $this->___callPlugins('getHeaders', func_get_args(), $pluginInfo) : parent::getHeaders();
    }

    /**
     * {@inheritdoc}
     */
    public function getFrom() : ?array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrom');
        return $pluginInfo ? $this->___callPlugins('getFrom', func_get_args(), $pluginInfo) : parent::getFrom();
    }

    /**
     * {@inheritdoc}
     */
    public function getTo() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTo');
        return $pluginInfo ? $this->___callPlugins('getTo', func_get_args(), $pluginInfo) : parent::getTo();
    }

    /**
     * {@inheritdoc}
     */
    public function getCc() : ?array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCc');
        return $pluginInfo ? $this->___callPlugins('getCc', func_get_args(), $pluginInfo) : parent::getCc();
    }

    /**
     * {@inheritdoc}
     */
    public function getBcc() : ?array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBcc');
        return $pluginInfo ? $this->___callPlugins('getBcc', func_get_args(), $pluginInfo) : parent::getBcc();
    }

    /**
     * {@inheritdoc}
     */
    public function getReplyTo() : ?array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReplyTo');
        return $pluginInfo ? $this->___callPlugins('getReplyTo', func_get_args(), $pluginInfo) : parent::getReplyTo();
    }

    /**
     * {@inheritdoc}
     */
    public function getSender() : ?\Magento\Framework\Mail\Address
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSender');
        return $pluginInfo ? $this->___callPlugins('getSender', func_get_args(), $pluginInfo) : parent::getSender();
    }

    /**
     * {@inheritdoc}
     */
    public function getMessageBody() : \Magento\Framework\Mail\MimeMessageInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMessageBody');
        return $pluginInfo ? $this->___callPlugins('getMessageBody', func_get_args(), $pluginInfo) : parent::getMessageBody();
    }

    /**
     * {@inheritdoc}
     */
    public function getBodyText() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBodyText');
        return $pluginInfo ? $this->___callPlugins('getBodyText', func_get_args(), $pluginInfo) : parent::getBodyText();
    }

    /**
     * {@inheritdoc}
     */
    public function toString() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        return $pluginInfo ? $this->___callPlugins('toString', func_get_args(), $pluginInfo) : parent::toString();
    }

    /**
     * {@inheritdoc}
     */
    public function setMessageType($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMessageType');
        return $pluginInfo ? $this->___callPlugins('setMessageType', func_get_args(), $pluginInfo) : parent::setMessageType($type);
    }

    /**
     * {@inheritdoc}
     */
    public function setBody($body)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBody');
        return $pluginInfo ? $this->___callPlugins('setBody', func_get_args(), $pluginInfo) : parent::setBody($body);
    }

    /**
     * {@inheritdoc}
     */
    public function setSubject($subject)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSubject');
        return $pluginInfo ? $this->___callPlugins('setSubject', func_get_args(), $pluginInfo) : parent::setSubject($subject);
    }

    /**
     * {@inheritdoc}
     */
    public function getSubject()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSubject');
        return $pluginInfo ? $this->___callPlugins('getSubject', func_get_args(), $pluginInfo) : parent::getSubject();
    }

    /**
     * {@inheritdoc}
     */
    public function getBody()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBody');
        return $pluginInfo ? $this->___callPlugins('getBody', func_get_args(), $pluginInfo) : parent::getBody();
    }

    /**
     * {@inheritdoc}
     */
    public function setFrom($fromAddress)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFrom');
        return $pluginInfo ? $this->___callPlugins('setFrom', func_get_args(), $pluginInfo) : parent::setFrom($fromAddress);
    }

    /**
     * {@inheritdoc}
     */
    public function setFromAddress($fromAddress, $fromName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFromAddress');
        return $pluginInfo ? $this->___callPlugins('setFromAddress', func_get_args(), $pluginInfo) : parent::setFromAddress($fromAddress, $fromName);
    }

    /**
     * {@inheritdoc}
     */
    public function addTo($toAddress)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addTo');
        return $pluginInfo ? $this->___callPlugins('addTo', func_get_args(), $pluginInfo) : parent::addTo($toAddress);
    }

    /**
     * {@inheritdoc}
     */
    public function addCc($ccAddress)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addCc');
        return $pluginInfo ? $this->___callPlugins('addCc', func_get_args(), $pluginInfo) : parent::addCc($ccAddress);
    }

    /**
     * {@inheritdoc}
     */
    public function addBcc($bccAddress)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addBcc');
        return $pluginInfo ? $this->___callPlugins('addBcc', func_get_args(), $pluginInfo) : parent::addBcc($bccAddress);
    }

    /**
     * {@inheritdoc}
     */
    public function setReplyTo($replyToAddress)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setReplyTo');
        return $pluginInfo ? $this->___callPlugins('setReplyTo', func_get_args(), $pluginInfo) : parent::setReplyTo($replyToAddress);
    }

    /**
     * {@inheritdoc}
     */
    public function getRawMessage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRawMessage');
        return $pluginInfo ? $this->___callPlugins('getRawMessage', func_get_args(), $pluginInfo) : parent::getRawMessage();
    }

    /**
     * {@inheritdoc}
     */
    public function setBodyHtml($html)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBodyHtml');
        return $pluginInfo ? $this->___callPlugins('setBodyHtml', func_get_args(), $pluginInfo) : parent::setBodyHtml($html);
    }

    /**
     * {@inheritdoc}
     */
    public function setBodyText($text)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBodyText');
        return $pluginInfo ? $this->___callPlugins('setBodyText', func_get_args(), $pluginInfo) : parent::setBodyText($text);
    }
}
